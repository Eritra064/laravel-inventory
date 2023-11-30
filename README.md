<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel Inventory Management System (IMS)

This is a basic Inventory Management System (IMS) built with Laravel. The application allows users to manage product details with essential CRUD operations. The project is focused on simplicity, adhering to Laravel best practices, and providing a user-friendly interface.

## Table of Contents

1. Laravel Setup
2. Database Design
3. Product Management
4. User Interface
5. Authentication
6. Routing and Controllers
7. Documentation

## Learning Setup

# Clone the repository

git clone https://github.com/Eritra064/laravel-inventory.git

# Navigate to the project directory

cd your-project-directory

# Install dependencies

composer install

# Copy the .env.example file and update the database configuration

cp .env.example .env

# Generate the application key

php artisan key:generate

# Run migrations and seed the database

php artisan migrate --seed

# Start the development server

php artisan serve

Visit 'http://localhost:8000' in your browser to access the application.

## Database Design

The application uses a MySQL database with a products table containing fields: id, name, quantity, price, description, edit and delete fields.

### Product Management

CRUD operations for products are implemented, allowing users to add, view, update, and delete product details. Basic form validation is in place to ensure data integrity.

## User Interface

The front-end is developed using Laravel Blade, providing a simple and user-friendly interface for product management.

## Authentication

A basic authentication system is set up using Laravel Breeze. CRUD operations are accessible only to logged-in users.

## Routing and Controllers

Efficient Laravel routing and controllers are utilized, following RESTful principles where applicable.

## Documentation

For detailed instructions on setting up and using the application, please refer to the <a href="https://laravel.com/">Laravel</a>.
