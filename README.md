# Instrucciones

Luego de tener acceso al repositorio, debemos clonar el repositorio. Para este ejemplo, usaré el repositorio de la página web de senter.mx, pero el proceso es similar para casi todos.

## Installation

Teniendo la URL, clonamos el repositorio usando: 

```bash
git clone
```
Al finalizar, y sabiendo que es un proyecto de PHP+Laravel debemos ejecutar los siguientes comandos para instalar las dependencias.

## Usage

```bash
composer install && composer update
```
La gran mayoría de los proyectos usan react.js apoyándose de webpack para manejar los componentes en el proyecto. Por lo cual ejecutar el siguiente comando puede ser importante:
```bash
yarn
```
ó 

```bash
npm install
```

Recomiendo personalmente usar yarn. En caso de usar npm como gestor de paquetes, borrar el archivo yarn.lock o npm.lock

Al hacer estas acciones, laravel no podrá inicar de forma apropiada debido a que falta el archivo .env. Aunque .env esta en la lista de .gitignore recomiendo no subirlo al repositorio sino crearlo desde cero y hechar un vistazo al archivo de producción para crear uno nuevo.

 
Por último, se debe migrar la base de datos usando el siguiente comando, luego de haber configurado las variables de entorno de la abse de datos en ela rchivo .env:

```bash
php artisan migrate
```
