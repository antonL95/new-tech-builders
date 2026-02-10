# Project Guidelines

This project's coding guidelines are split into path-scoped rule files in `.claude/rules/`. Only relevant rules load based on the files being edited.

## Package Versions

- php - 8.5.2
- laravel/framework (LARAVEL) - v12
- laravel/octane (OCTANE) - v2
- laravel/prompts (PROMPTS) - v0
- livewire/flux (FLUXUI_FREE) - v2
- livewire/flux-pro (FLUXUI_PRO) - v2
- livewire/livewire (LIVEWIRE) - v4
- larastan/larastan (LARASTAN) - v3
- laravel/mcp (MCP) - v0
- laravel/pint (PINT) - v1
- laravel/sail (SAIL) - v1
- pestphp/pest (PEST) - v4
- phpunit/phpunit (PHPUNIT) - v12
- rector/rector (RECTOR) - v2

## Rule Files

| File | Scope | Description |
|------|-------|-------------|
| `foundation.md` | Global | Project conventions, skills, structure, communication |
| `tooling.md` | Global | Laravel Boost MCP tools and Herd serving |
| `php.md` | `**/*.php` | PHP coding standards, types, constructors, enums |
| `laravel-core.md` | `**/*.php` | Eloquent, models, database, auth, queues, config |
| `laravel-v12.md` | `**/*.php` | Laravel 12 structure and version-specific changes |
| `controllers.md` | `app/Http/Controllers/**`, `app/Http/Requests/**` | Form Requests, validation, API resources |
| `livewire.md` | `app/Livewire/**`, `resources/views/**/*.blade.php` | Livewire component development |
| `fluxui.md` | `resources/views/**/*.blade.php` | Flux UI Pro components |
| `testing.md` | `tests/**/*.php` | Pest testing and test creation |
| `pint.md` | `**/*.php` | Laravel Pint code formatting |
