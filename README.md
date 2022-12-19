# Requisitos previos
1. Composer
2. PHP 8.1 o más
3. Motor DB (MySQL, MariaDB o PostgreSQL)

# Instalación

1. composer install
2. renombra .env.example a .env
3. crea una bbdd y cumplimenta sus variables en .env
4. php artisan migrate
5. levanta el servidor con php artisan serve


# Rutas

[POST] 127.0.0.1:8000/api/auth/register    -> Crear usuario por POST pasando name, email y password
[POST] 127.0.0.1:8000/api/auth/login    -> Acceder con un usuario por POST pasando email y password
[GET] 127.0.0.1:8000/api/note          -> Leer notas del usuario autenticado
[POST] 127.0.0.1:8000/api/note          -> Guardar nota del usuario pasando 'content'
