---
description: Local development runs in Docker on OrbStack through bin/dev
---

# Local development environment

The application runs in Docker on OrbStack. `bin/dev` starts the stack and runs every PHP, Composer and Bun command inside a container. Nothing runs on the Mac directly, and no secret ever touches the disk.

## Never run project tooling on the host

Never run `php`, `composer`, `bun`, `bunx`, `npm`, `npx`, `pnpm` or `node` on the Mac. Use the `bin/dev` form instead. Every command named in the other rules means its `bin/dev` form.

| Instead of | Run |
|------------|-----|
| `php artisan ...` | `bin/dev artisan ...` |
| `php artisan tinker` | `bin/dev tinker` (prefer the Boost `tinker` tool) |
| `composer ...` (packages and scripts such as `composer lint`) | `bin/dev composer ...` |
| the test suite | `bin/dev test` |
| `vendor/bin/pint --dirty --format agent` and other binaries | `bin/dev tools vendor/bin/pint --dirty --format agent` |
| `bun ...`, `npm ...`, `npx ...` | `bin/dev bun ...` |

## The running stack

- The app is served at https://new-tech-builders.orb.local, Vite at https://vite.new-tech-builders.orb.local. A worktree has its own stack at `https://new-tech-builders-<folder>.orb.local`. Use the Boost `get-absolute-url` tool for links.
- Never start a server. If the site does not answer, the stack is down: ask the user, or run `bin/dev up`.
- Code changes apply without restarts: Octane watches PHP files and Vite serves HMR. If a frontend change does not show, check the stack with `bin/dev compose ps` before building anything.
- `bin/dev composer`, `bin/dev bun` and `bin/dev tools` get no application secrets. Never try to pass secrets to them or write secrets to a file.
- `bin`, `docker`, `compose.dev.yaml`, `Dockerfile`, `.git` and the agent configuration are read only inside the containers. Edit them on the Mac.
- Never run `migrate:fresh` or `db:wipe` against the local database.
- Production runs on Coolify. `.github/workflows/deploy.yml` deploys the web app on every push to `main`. Never deploy by hand.
