# Laravel Authentication API

## Table of Contents
* [About](#about)
* [Getting Started](#getting-started)
* [Key Features](#key-features)


## About

This project is a RESTful API built with Laravel 11, designed for secure authentication and user management. It provides robust access control with role-based permissions, secure authentication via Laravel Sanctum, and password reset functionality. The API follows best practices for validation, error handling, and database management, making it scalable and maintainable.  

## Key Features

### Authentication and Authorization
- User registration, login, and logout with secure session management via Laravel Sanctum.
- Laravel Sanctum-based API authentication.
- Role-based access control to manage different user permissions.

### RESTful API
- Endpoints for user management, authentication, and dependent data handling.
- API request validation for security and data integrity.
- Structured error handling for better debugging and API responses.

### Dynamic Dependent Fields
- The registration form dynamically updates available languages based on the selected country.
- Countries and languages data is seeded from a JSON file stored in private storage.

### Database & Migrations
- MySQL database integration.
- Migrations and seeders for quick setup and testing.

### Hosting & Deployment
- The backend is hosted online with a MySQL database and real email functionality for password reset.
- [Mailtrap](https://mailtrap.io/) is used for email testing in development and [Brevo](https://www.brevo.com/) for production.

## Getting Started

## Follow these steps to set up and run the project locally:

### Prerequisites
- Ensure MySQL running.
- Install Node.js and npm.
- Install Composer for managing PHP dependencies.

#### Clone the repository:

```
git clone https://github.com/nick-r-o-s-e/Auth_Laravel-API
```

#### Install PHP dependencies:

```
composer install
```

#### Set up the environment file:

- Create a .env file in the back folder.
- Add YOUR database connection settings (e.g., database name, username, and password).
- Add YOUR mailer connection settings.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog_crud
DB_USERNAME=root
DB_PASSWORD=

MAIL_MAILER=log
MAIL_SCHEME=null
MAIL_HOST=127.0.0.1
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```

#### Run database migrations:

```
php artisan migrate
```

#### Seed the database (optional):

```
php artisan db:seed
```

#### Start the server:

```
php artisan serve
```

The backend server usually will be available at http://127.0.0.1:8000
