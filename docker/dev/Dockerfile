# syntax=docker/dockerfile:1
FROM oven/bun:1.4.3-debian AS bun-source

FROM base
USER root
RUN install-php-extensions pcov
RUN apt-get update \
 && apt-get install -y --no-install-recommends git procps \
 && rm -rf /var/lib/apt/lists/*
COPY --from=bun-source /usr/local/bin/bun /usr/local/bin/bun
RUN ln -s bun /usr/local/bin/bunx \
 && ln -s bun /usr/local/bin/node
RUN mkdir -p /var/www/.pest /var/www/.pki /composer/cache /tmp/rector_cached_files /tmp/phpstan \
 && chown -R www-data:www-data /var/www/.pest /composer /tmp/rector_cached_files /tmp/phpstan /var/www/.pki
USER www-data
