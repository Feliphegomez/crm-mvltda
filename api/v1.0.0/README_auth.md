# PHP-API-AUTH (v1)

Script PHP de un solo archivo que agrega autenticación a un proyecto [PHP-CRUD-API] (https://github.com/mevdschee/php-crud-api).

## Requisitos

  - PHP 5.3 o superior

## Nombre de usuario simple + contraseña

En el servidor API

- login.html está cargado
- envía el nombre de usuario + contraseña a través de POST a "api.php /"
- se carga api.php (POST en "/" se secuestra a auth.php)
- devuelve el token csrf + cookie de sesión solo http
- llamar a la API como: api.php? csrf = \ [csrf token] (la cookie de sesión se envía automáticamente)
- (cuando se usa Angular2 o Vue2, el token CSRF se envía automáticamente)

## Con el servidor de autenticación

En el servidor de autenticación

- login_token.html está cargado
- envía el nombre de usuario y la contraseña a través de POST a "login_token.php"
- login_token.php está cargado
- envía el token a través de POST a "api.php /"

En el servidor API

- se carga api.php (POST en "/" se secuestra a auth.php)
- devuelve el token csrf + cookie de sesión solo http
- llamar a la API como: api.php? csrf = \ [csrf token] (la cookie de sesión se envía automáticamente)
- (cuando se usa Angular2 o Vue2, el token CSRF se envía automáticamente)
