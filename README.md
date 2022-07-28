step 1.

- composer install
- php artisan migrate
- create file " .env "
- open .env.example
- cmd / cntl + A (select all) copy
- paste into .env
- in command line type " php artisan key:generate "
- create database in mysql
    -   disneyCounterSystem
- in .env replace with this
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=disneyCounterSystem
    DB_USERNAME={username mysql}
    DB_PASSWORD={password mysql}
- in comand line type " php artisan migrate "
-
