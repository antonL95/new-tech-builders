---
description: Laravel Pint code formatting rules
globs:
  - "**/*.php"
---

# Laravel Pint Code Formatter

- You must run `bin/dev tools vendor/bin/pint --dirty --format agent` before finalizing changes to ensure your code matches the project's expected style.
- Do not run Pint with `--test`; run `bin/dev tools vendor/bin/pint --format agent` to fix any formatting issues.
