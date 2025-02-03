# Vue Laravel Project

<p align="center">
<a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a>
</p>

## About The Project

This is a full-stack web application built using Laravel as the backend framework and Vue.js as the frontend framework. It combines the power of Laravel's robust backend capabilities with Vue's reactive frontend features.

## Requirements

- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL/PostgreSQL
- Laravel CLI
- Vue.js 3

## Installation

1. Clone the repository
```bash
git clone [your-repo-link]
```

2. Install PHP dependencies
```bash
composer install
```

3. Install NPM dependencies
```bash
npm install
```

4. Create environment file
```bash
cp .env.example .env
```

5. Generate application key
```bash
php artisan key:generate
```

6. Configure your database in .env file

7. Run migrations
```bash
php artisan migrate
```

## Development

Run the development server:
```bash
php artisan serve
```

Compile assets:
```bash
npm run dev
```

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
