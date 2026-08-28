---
description: Laravel 13 structure and version-specific changes
globs:
  - "**/*.php"
---

# Laravel 13

- CRITICAL: ALWAYS use `search-docs` tool for version-specific Laravel documentation and updated code examples.
- Since Laravel 11, Laravel has a new streamlined file structure which this project uses.
- Laravel 13 requires PHP 8.3 or higher.

## Laravel 13 Structure

- In Laravel 13, middleware are no longer registered in `app/Http/Kernel.php`.
- Middleware are configured declaratively in `bootstrap/app.php` using `Application::configure()->withMiddleware()`.
- `bootstrap/app.php` is the file to register middleware, exceptions, and routing files.
- `bootstrap/providers.php` contains application specific service providers.
- The `app\Console\Kernel.php` file no longer exists; use `bootstrap/app.php` or `routes/console.php` for console configuration.
- Console commands in `app/Console/Commands/` are automatically available and do not require manual registration.

## Security

- The CSRF middleware is `Illuminate\Foundation\Http\Middleware\PreventRequestForgery`. `VerifyCsrfToken` and `ValidateCsrfToken` are deprecated aliases; never reference them in new code, including when excluding middleware in tests or route definitions.
- Configure it through the `preventRequestForgery(...)` middleware method.
- `config/cache.php` sets `serializable_classes` to `false`. Caching a PHP object requires adding its class to that allow-list; prefer caching arrays instead.
- `config/session.php` sets `serialization` to `json`. Do not store PHP objects in the session.

## Database

- When modifying a column, the migration must include all of the attributes that were previously defined on the column. Otherwise, they will be dropped and lost.
- Laravel 13 allows limiting eagerly loaded records natively, without external packages: `$query->latest()->limit(10);`.
- `upsert()` requires a non-empty `uniqueBy` value and throws `InvalidArgumentException` without one, including on MySQL and MariaDB where the driver ignores it.

### Models

- Casts can and likely should be set in a `casts()` method on a model rather than the `$casts` property. Follow existing conventions from other models.
- Instantiating a model while that same model is still booting throws a `LogicException`. Keep model instantiation out of `boot` and `boot*` methods.

## Support

- Prefer `Illuminate\Support\Arr::first()` and `Arr::last()` over the global `array_first()` and `array_last()` functions, which Laravel 13 polyfills with different semantics on PHP versions below 8.5.
- Custom driver closures registered through a manager's `extend` method are bound to the manager instance. Capture any other required objects with `use (...)`.
