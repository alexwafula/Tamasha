# Tamasha

An Event Web Based System that Promotes Local Businesses and Creatives in Nairobi.

## Table of Contents

[General Information] (#general info)
[Installation] (#installation)
[Technologies] (#technologies)
[Features] (#features)
[Licenses] (#licenses)


## General Information

This project is a web-based event promotion system that aims to promote various events in Nairobi. It functions as a centralised platform through which users can easily discover and explore a diverse range of exciting events such as concerts, conferences, and cultural gatherings. The web-based system focuses on providing detailed event information as well as a booking platform that connects event organisers and attendees. It covers a wide range of topics, including music, art, sports, technology, and more. 


## Installation

### Prerequisites:

Make sure you have Git installed on your system. You can download it from the official website (https://git-scm.com/).
Ensure you have PHP and Composer installed on your system. Laravel requires PHP and Composer to be present.
Set up a web server (e.g., Apache or Nginx) with PHP enabled.

### Clone the repository:

Open your terminal or command prompt.

Navigate to the directory where you want to clone the Laravel project.

Run the following command to clone the repository:
git clone <https://github.com/alexwafula/Tamasha.git>

### Install dependencies:

Navigate into the cloned project directory:
cd <C:\xampp\htdocs\Tamasha\Tamasha>
Run the following command to install the required dependencies using Composer:
composer install

### Configuration:

Rename the .env.example file to .env:
cp .env.example .env

Generate the application key:
php artisan key:generate

This command will generate a unique application key used for encryption and other security features.

### Database configuration:

Open the .env file and provide the necessary database credentials (database name, username, password, etc.):
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tamasha
DB_USERNAME=root
DB_PASSWORD=

### Migrate and seed the database (optional):
php artisan migrate --seed

### Serve the application:

You can use Laravel's built-in development server to run the application locally. Run the following command:

If the project includes database migrations and seeders, you can run the following command to create the necessary database tables and seed the initial data:
php artisan serve

By default, the application will be served at http://localhost:8000.


## Technologies

Laravel is a well-known PHP framework that is known for its elegant syntax, robust features, and scalability. With efficient routing, database integration, and powerful ORM (Object-Relational Mapping), it provides a solid foundation for building web applications.

PHP: PHP is a popular server-side programming language used in web development. Dynamic content generation, database connectivity, and seamless integration with HTML and other web technologies are all possible.
MySQL or another RDBMS (relational database management system): RDBMS is used to store event data, user information, ticket information, and other pertinent data.

HTML/CSS: HTML and CSS are used to structure and style the frontend user interface of a website.

JavaScript: JavaScript adds dynamic features such as event filtering, search functionality, and AJAX-based interactions to provide interactivity and enhance the user experience.

Bootstrap or another frontend framework: A frontend framework helps in creating responsive and visually appealing designs with pre-built components and styles.


## Features

User Registration and Authentication: Allow users to register, sign in, and manage their profiles. This allows for personalised interactions, ticket purchases, and event bookmarking.


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
