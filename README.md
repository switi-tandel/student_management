# Student Management System

## Project Setup

1. **Clone the repository:**
   ```bash
   git clone <repository-url>
   cd student_management
2.**Install Composer dependencies:**
   composer install
3.**Copy the .env.example file to .env:**
   cp .env.example .env
4.**Generate the application key:**
   php artisan key:generate
5.**Set up your database configuration in the .env file:**
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
6.**Set up mail credentials in the .env file:**
    MAIL_MAILER=smtp
    MAIL_HOST=smtp.example.com
    MAIL_PORT=587
    MAIL_USERNAME=your_email@example.com
    MAIL_PASSWORD=your_email_password
    MAIL_ENCRYPTION=tls
    MAIL_FROM_ADDRESS=your_email@example.com
    MAIL_FROM_NAME="${APP_NAME}"
7.**Run migrations and seeder command**
    php artisan migrate:fresh --seed 
8.**Start the development server:**
    php artisan serve
9.**Install NPM dependencies:**
    npm install
10.**Compile assets for development:**
    npm run dev
11.**admin email and password enter on login page**
    email - admin@admin.com
    password - 12345678


