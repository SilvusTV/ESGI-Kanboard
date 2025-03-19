remplacer le contenu de supervisor.conf.exemple dans vendor/laravel/sail/runtime/8.3/supervisord.conf

copier le .env

php artisan key:generate

php artisan sail:install

./vendor/bin/sail up -d

./vendor/bin/sail artisan migrate:fresh
