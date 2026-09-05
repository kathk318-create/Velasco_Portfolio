# Velasco Portfolio — Laravel 13

Fresh Laravel skeleton. Portfolio site, single welcome page, SQLite database.

## Key commands

```sh
composer setup   # install, env, key, migrate, npm install, vite build
composer dev     # artisan dev (Vite + server, no timeout)
composer test    # config:clear then artisan test
```

- Tests run SQLite in-memory (`phpunit.xml`), no external DB needed.
- Pint (formatter) is in `require-dev` but has no `pint.json` — uses defaults.

## Stack specifics

- **Tailwind v4**: uses `@import 'tailwindcss'` (not `@tailwind` directives). Config in `resources/css/app.css`.
- **Vite 8** with `laravel-vite-plugin`. Entry points: `resources/css/app.css`, `resources/js/app.js`.
- **Font**: Instrument Sans loaded via `laravel-vite-plugin/fonts` bunny provider in `vite.config.js`.
- Vite watch ignores `storage/framework/views/`.
- `.npmrc` sets `ignore-scripts=true`.

## XAMPP environment

Local dev runs on XAMPP (Windows). `.env` defaults to `http://localhost:8000`.

## Conventions

- No CI, no pre-commit hooks configured.
- No custom Pint/linting config — code style follows Laravel defaults.
- No controllers, models (besides User), or custom routes yet.
