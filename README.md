# Apartement Directory List (Simple Experiment Apps)

## Prerequiste

-   [Composer](https://getcomposer.org/) - Download and Install Composer
-   Docker
-   Docker Compose Plugin

## Stacks

-   PHP 7.4.3 
-   Laravel 8
-   Docker
-   Sails
-   Livewire 
-   PostgreSQL 

(Running inside Container)

## Installation

1. Clone repository

```bash
$  git clone git remote add origin git@github.com:Zainal21/Apartement-list-directory.git
```

2. move to directory project and Install depedencies

```bash
$ cd Apartement-list-directory

$ Composer install
```

4. Setup your environment variable in `.env` files or rename `.env.example to .env` based on your configuration in your _docker-compose.yml_ file.


5. Generate your application key

```bash
$ php artisan key:generate
```

6. Run Migration and Seeder (if you not import .sql file manually)

```bash
$ php artisan migrate --seed
```

7. Run application with sail command

```bash
$ ./vendor/bin/sail up or docker compose up -d
```

8. Open in your browser in port 80 


Copyright © 2022 by Muhamad Zainal Arifin
