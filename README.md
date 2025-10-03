<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Laravel Trucking Transportation

This project is built with [Laravel](https://laravel.com), a PHP web application framework with expressive and elegant syntax.  
It provides the foundation for robust, modern web applications.

---

## 🚀 Getting Started

Follow the instructions below to set up and run this project locally.

### Requirements
Make sure you have the following installed on your system:
- [PHP >= 8.1](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [MySQL](https://dev.mysql.com/downloads/mysql/) or MariaDB
- [Node.js & NPM](https://nodejs.org/)

Optional but recommended for local development:
- [Laravel Herd](https://herd.laravel.com/) or [Laravel Valet](https://laravel.com/docs/valet)

---

### 1. Clone the Project
```bash
git clone https://github.com/your-username/laravel-truckingtransportation.git
cd laravel-truckingtransportation

2. Install Dependencies

Install PHP dependencies:
composer install



Install JavaScript dependencies:
npm install && npm run build

3. Create Environment File

Create a .env file in the project root and paste the following configuration:
APP_NAME=Laravel
APP_ENV=local
APP_KEY="YOUR_KEY_HERE"
APP_DEBUG=true
APP_URL=http://localhost

APP_LOCALE=en
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=en_US

APP_MAINTENANCE_DRIVER=file

PHP_CLI_SERVER_WORKERS=4
BCRYPT_ROUNDS=12

LOG_CHANNEL=stack
LOG_STACK=single
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_trucking
DB_USERNAME=root
DB_PASSWORD="YOUR_DB_PASSWORD_HERE"

SESSION_DRIVER=database
SESSION_LIFETIME=120
SESSION_ENCRYPT=false
SESSION_PATH=/
SESSION_DOMAIN=null

BROADCAST_CONNECTION=log
FILESYSTEM_DISK=local
QUEUE_CONNECTION=database

CACHE_STORE=database

MEMCACHED_HOST=127.0.0.1

REDIS_CLIENT=phpredis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_SCHEME=null
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=ardahanozduman@epicalgorithms.com
MAIL_PASSWORD=wpjycdqkfxowttjt
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=ardahanozduman@epicalgorithms.com
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

VITE_APP_NAME="${APP_NAME}"

GOOGLE_MAPS_API_KEY=YOUR_GOOGLE_MAPS_API_KEY_HERE
CONTACT_FORM_RECIPIENT=ardahanoz@hotmail.com


4. Generate Application Key (if not already set)
php artisan key:generate


5. Setup Database
Create the database defined in .env (laravel_trucking) and run migrations:
php artisan migrate

6. Run the Application
Start the Laravel development server:
php artisan serve
By default, the app will be accessible at:
👉 http://localhost:8000

📚 Resources
Laravel Documentation
Laravel Bootcamp
Laracasts


