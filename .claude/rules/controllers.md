---
description: Controller validation, Form Requests, API resources
globs:
  - "app/Http/Controllers/**/*.php"
  - "app/Http/Requests/**/*.php"
---

# Controllers & Validation

- Always create Form Request classes for validation rather than inline validation in controllers. Include both validation rules and custom error messages.
- Check sibling Form Requests to see if the application uses array or string based validation rules.
