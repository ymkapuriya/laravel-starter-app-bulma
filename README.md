# Laravel Starter App

## Laravel
Laravel is a massively popular web application framework with expressive, elegant syntax. Laravel takes the pain out of development by easing common tasks used in many web projects, Laravel is accessible, powerful, and provides tools required for large, robust applications.

## About Package
This package built in **[Laravel 7](https://laravel.com/)** could be considered as a starter package to start with any application to be built in Laravel using MVC architecture. Mainly it includes following features:

- Authentication 
- Routing with auth middleware
- Resource controller
- Model demonstration with relationship
- Views to perform CRUD operations
- Service provider demonstration
- Application configuration management
- Custom components

### Plugins used 

- **[Laravel Collective](https://laravelcollective.com/)** - HTML and Form builder

### System Requirements

-  **[Laravel System Requirements](https://laravel.com/docs/7.x/installation)**
-  **[Compoer](https://getcomposer.org/)**
-  **[npm](https://www.npmjs.com/)**
 
## Frontend Framework - Bulma

-  **[Bulma](https://bulma.io/)** - Open source CSS framework based on Flexbox

###  Bulma Extensions

-  **[Toast](https://rfoel.github.io/bulma-toast/)** - Bulma's pure JavaScript extension to display toasts
-  **[Divider](https://demo.creativebulma.net/components/divider/1.1/)** - Easily display an horizontal or vertical divider with optional text.
-  **[Datepicker](https://creativebulma.net/product/calendar/demo)** - Calendar component with range selection capability


###  Other Libraries
 
-  **[Font Awesome](https://fontawesome.com/icons?d=gallery)** - For Icons
-  **[Nunito Font](https://fonts.googleapis.com/css?family=Nunito:400,700)** - For Font
-  **[Animate.css](https://animate.style/)** - CSS Animation

 
###  Customization

**[Customization](https://bulma.io/documentation/customize/with-node-sass/)** of the application is done with node-sass.
 
#### Steps for customization

1. Update scss file present at **/sass/mystyles.scss**
2. Rebuild node-sass using command - `npm rebuild node-sass`
3. Build css file using command - `npm run css-build`.
4. Step-4 should create css file at **/css/mystyles.css**
5. Include **/css/mystyles.css** on the html pages.
 
#### Modular Approach

The **[modular apprach of Bulma](https://bulma.io/documentation/overview/modular/)** allows components integration as on required. This approach is practiced in this project. Therefore, component is to be added to *.scss* file in order to use it.
 
The following components are used in this projects.
| Category | Plugins |
| :------- | :------ |
| Utilities | *all* |
| Base | *all* |
| Helpers | *all* |
| Components | navbar, menu, tabs, card, level |
| Elements | button, container, title, content, image |
| Form | *all* |
| Grid | *all* |
| Layout | *all* |
 
## Setup & Installation
 
### Source code
Download the source code and then run following commands from source folder.
```
$ composer install
$ npm install
$ npm run dev
```

### Environment
Create database user along with database and update detail in .env file. Then run following command from the source folder. It will create auth tables and two other tables `designations` and `staff_members` in the database.
```
php artisan migrate --seed
```
This will create necessary tables and one user account to start with. Remember this authentication module for this application is built without regitration support.

| Username | Password |
| -------- | -------- |
| admin@email.com | simple |

### Execution
Run the following command to start application.
```
php artisan serve
```
### Troubleshooting
In case some error occurs, you could try follwing commands to solve cache related errors.
```
php artisan optimize:clear
php artisan optimize
composer dump-autoload
```

### Note
Remember this is just a basic application to start with. In order to explore more you, can visit **[`Laravel's official documentation`](https://laravel.com/docs/7.x)**.

## License
This software is licensed under the [MIT license](https://opensource.org/licenses/MIT).