# Performance App

### Getting Started

First, clone the project :

```bash
git clone https://github.com/anasbrn/structure_laravel_11.git
```

### Requirements
    PHP Version >= 8.2
    Composer Version >= 2

### Usage

```bash
composer install
```

Add <b>.env</b> file based on <b>.env.example</b>

```bash	
Using Bash: cp .env.example .env

Using Powershell: copy .env.example .env
```

Add Application key

```bash	
php artisan key:generate 
```

Run migration

```bash	
php artisan migrate
```
Run the local server

```bash
php artisan serve
```
