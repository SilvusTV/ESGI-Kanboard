remplacer le contenu de supervisor.conf.exemple dans vendor/laravel/sail/runtime/8.3/supervisord.conf

copier le .env

mettre son ip local dans REVERB_HOST et ne pas oublier de changer si son ip local change

php artisan key:generate

php artisan sail:install (mysql)

./vendor/bin/sail up -d

./vendor/bin/sail artisan migrate:fresh
