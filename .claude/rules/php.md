---
description: PHP coding standards, types, constructors, enums, comments
globs:
  - "**/*.php"
---

# PHP

- Always use curly braces for control structures, even for single-line bodies.

## Constructors

- Use PHP 8 constructor property promotion in `__construct()`.
    - <code-snippet>public function __construct(public GitHub $github) { }</code-snippet>
- Do not allow empty `__construct()` methods with zero parameters unless the constructor is private.

## Type Declarations

- Always use explicit return type declarations for methods and functions.
- Use appropriate PHP type hints for method parameters.

<code-snippet name="Explicit Return Types and Method Params" lang="php">
protected function isAccessible(User $user, ?string $path = null): bool
{
    ...
}
</code-snippet>

## Enums

- Typically, keys in an Enum should be TitleCase. For example: `FavoritePerson`, `BestLake`, `Monthly`.

## Comments

- Do not write comments in code. No inline `//` comments, no prose sentences in docblocks. Code should explain itself through naming and structure.
- The only docblock content allowed is machine-read annotation carrying information the native type system cannot express: `@param`, `@return`, `@var`, `@throws`, `@template`, generics, `array{...}` shapes, `@property`, `@method`, `@mixin`, `@deprecated`, and `/** @use ... */` on traits.
- Never write summary or description lines in a docblock. When a method carries a docblock for a type annotation, the annotation is the entire content.
- Delete any docblock that only repeats the native signature (for example `/** @param string $name */` when the parameter is already typed `string $name`).
- `TODO`, `FIXME`, `HACK`, `XXX`, commented-out code, and section-banner comments must not exist anywhere in the repo. Never add one, and delete any you touch, including in published config stubs. Track pending work in the issue tracker, not in the source.
- Do not write `{{-- --}}` comments in Blade templates. No section labels, no narration around Livewire or Flux markup, no commented-out markup.
- A comment survives only when a tool acts on the code because of it. These are directives, not comments, and must stay: `@phpstan-*`, `@psalm-*`, `@codeCoverageIgnore`, and a `#!` shebang on an executable script.

## PHPDoc Blocks

- Add useful array shape type definitions when appropriate.
