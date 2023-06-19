## Laravel10-Blog for practice purposes

## Installation using docker

1. Clone the project using git
2. Copy `.env.example` into `.env`. Adjust `DB_*` parameters.
3. Navigate to the project root directory and run `docker-compose up -d web`
4. Run `composer install` inside `php` container.
5. Run `php artisan key:generate --ansi` inside `php` container.
6. Run `php artisan migrate` inside `php` container.
7. Open in browser http://localhost
