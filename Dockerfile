# syntax=docker/dockerfile:1
FROM oven/bun:1.4.0 AS bun-source

FROM serversideup/php:8.5-cli-v5.0.3 AS cli-base
USER root
RUN install-php-extensions intl bcmath
USER www-data

FROM serversideup/php:8.5-frankenphp-v5.0.3 AS web-base
USER root
RUN install-php-extensions intl bcmath
USER www-data

FROM cli-base AS vendor
COPY --chown=www-data:www-data composer.json composer.lock /var/www/html/
RUN --mount=type=cache,target=/composer/cache,uid=33,gid=33 \
    composer install --no-dev --no-interaction --no-scripts --no-autoloader
COPY --chown=www-data:www-data . /var/www/html
RUN --mount=type=cache,target=/composer/cache,uid=33,gid=33 \
    composer install --no-dev --no-interaction --optimize-autoloader

FROM vendor AS assets
ENV BUN_INSTALL_CACHE_DIR=/tmp/bun-cache
COPY --from=bun-source /usr/local/bin/bun /usr/local/bin/bun
RUN --mount=type=cache,target=/tmp/bun-cache,uid=33,gid=33 \
    bun install --frozen-lockfile
RUN bun run build

FROM web-base AS web
ENV PHP_OPCACHE_ENABLE=1 \
    AUTORUN_ENABLED=true
COPY --from=vendor --chown=www-data:www-data /var/www/html /var/www/html
COPY --from=assets --chown=www-data:www-data /var/www/html/public/build /var/www/html/public/build
HEALTHCHECK --start-period=20s --start-interval=2s --interval=5s --timeout=3s --retries=36 \
    CMD ["curl", "--fail", "--silent", "--output", "/dev/null", "http://127.0.0.1:8080/up"]
CMD ["php", "artisan", "octane:start", "--server=frankenphp", "--port=8080", "--max-requests=500"]
