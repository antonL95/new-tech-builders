# New Tech Builders

## Local development

The local stack runs in Docker on OrbStack. No PHP, Composer, Bun or Node runs on the Mac: every install, build and test runs inside a container. Secrets never touch the disk. `bin/dev` reads them from Bitwarden Secrets Manager and hands them only to `php`. Every other container and every one off Composer or Bun run gets no secrets.

### One time setup

1. Install [OrbStack](https://orbstack.dev/) and the Bitwarden Secrets Manager CLI `bws` from the [Bitwarden SDK releases](https://github.com/bitwarden/sdk-sm/releases).
2. Store the machine account access token in the macOS Keychain, once per Mac (the command prompts for it): `security add-generic-password -a "$USER" -s bws-dev -w`.
3. Create `.dev.local` in the project root (it is gitignored) with the id of the Bitwarden project that holds the dev secrets: `echo 'BWS_PROJECT_ID=<project id>' > .dev.local`.
4. The Bitwarden project is shared by several applications, so this application's secrets carry the `NEW_TECH_BUILDERS_` prefix, which `bin/dev` removes before the stack starts: `NEW_TECH_BUILDERS_APP_KEY`.
5. Copy `.env.example` to `.env`. It holds only non secret configuration.
6. Start the stack and install the dependencies:
   ```bash
   bin/dev up
   bin/dev composer install
   bin/dev bun install
   bin/dev artisan migrate
   ```

The stack serves the application at https://new-tech-builders.orb.local and Vite at https://vite.new-tech-builders.orb.local. OrbStack issues trusted certificates for these names on the Mac and inside the containers.

### Daily commands

| Command | What it does |
|---------|--------------|
| `bin/dev up` | Builds the images and starts the stack with secrets from Bitwarden |
| `bin/dev restart` | Recreates `php` with freshly fetched secrets |
| `bin/dev down` | Stops the stack and keeps the data volumes |
| `bin/dev secrets:check` | Lists which of the expected secrets Bitwarden holds, by name only |
| `bin/dev logs [service]` | Follows the logs |
| `bin/dev compose ...` | Runs any `docker compose` command against this checkout's stack |
| `bin/dev artisan ...` | Runs Artisan in the `php` container |
| `bin/dev tinker` | Opens Tinker in the `php` container |
| `bin/dev shell` | Opens bash in the `php` container |
| `bin/dev test` | Runs `composer test:unit` in the `tools` container |
| `bin/dev composer ...` | Runs Composer in a one off `tools` container with a random throwaway `APP_KEY`, for example `bin/dev composer lint` |
| `bin/dev bun ...` | Runs Bun in a one off `bun` container, for example `bin/dev bun add <package>` |
| `bin/dev tools ...` | Runs a command in the `tools` container with a random throwaway `APP_KEY` |

Always go through `bin/dev`, including `bin/dev compose` instead of a plain `docker compose`. A plain `docker compose up` recreates the app containers without secrets, and only `bin/dev` checks that `.env` has not been changed to point Compose somewhere else.

To add a secret, create it in Bitwarden with the `NEW_TECH_BUILDERS_` prefix, add its name without the prefix to `x-app-secrets` in `compose.dev.yaml` and run `bin/dev restart`.

### Worktrees

Every git worktree gets its own stack named after its folder, served at `https://new-tech-builders-<folder>.orb.local`. Inside a new worktree run `bin/dev worktree:init` (it copies `.env` with the worktree's URLs and `.dev.local`), then the install commands above. `bin/dev worktree:list` shows the stacks, `bin/dev worktree:remove <name> [--force]` deletes a worktree together with its containers and volumes (it keeps the branch and refuses uncommitted changes without `--force`), and `bin/dev worktree:prune` deletes stacks whose worktree was removed some other way.

### Files the containers cannot change

The project is mounted read and write, because the containers install dependencies, format code and generate files. Files that run on the Mac outside Docker are mounted read only on top of it: `.git`, `.claude`, `.github`, `CLAUDE.md`, `.mcp.json`, `.idea`, `bin`, `docker`, `compose.dev.yaml`, `Dockerfile`, `docker-compose.yaml`. Package code running in a container can therefore not plant a git hook or change what `bin/dev` or Compose starts. A new file of that kind needs an entry in `x-project-volumes` in `compose.dev.yaml`, repeated in the services that list their volumes one by one.

Supply chain protection: `bunfig.toml` refuses npm versions younger than seven days, `trustedDependencies` lists the only packages allowed to run install scripts, and Composer's `policy` blocks packages with security advisories or a malware flag.
