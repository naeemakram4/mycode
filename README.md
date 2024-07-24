## <p align="center">MY CODE</p>


## About MY CODE
My Code project basically a small project to showcase my coding skills.
Features:
- Multiple Roles Admin and Employee
- Admin can manage employee permissions
- Admin can create project
- Admin can create tasks under a specific project
- Admin can create services

## Local Setup:
- Php v: 8.1 | Laravel 10.10
- git clone
- setup .env and database
- npm install and npm run dev
- composer install / composer update
- php artisan key:generate
- php artisan migrate --seed
- php artisan storage:link

## Important Files and structure
- All the custom configuration is located at, /config/mycode/...
- Aside menu file, /config/mycode/menu.php (We can update/add/delete menu item through this file).
- Permissions can be added through permissions.php file, located at, /config/mycode/permissions.php
- Template mix files are located at /resources/mix/...
- View files are distributed in different directories
- - Admin contains the admin view files.
- - Employee contains the employee view files.
- - layouts contains the admin, employee and auth layout main files.
- - Partials directory contain the partials of admin, employee and auth.
- Routes directory is also contain admin and employee directories to separate the routes.
- All the required seeders are already setup. So please run php artisan migrate --seed

## Admin Credentials
Username: admin
Password: admin123
