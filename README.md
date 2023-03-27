
## Setup Project
Before to start to run the project, you need to have installed PHP, Apache and Artisan 

## Run project on Local Commands
```shell
# Raise laravel server
php artisan serve

# Raise Vite
npm run dev

# Setup DataBase
php artisan migrate
# IMPORTANT, if the database doesn't exist, you should response 'yes' in the terminal
```
## Dev Commands

```shell
# create model
php artisan make:model modelName -m

# run migrations
php artisan migrate

# Create CRUD
php artisan make:crud modelName

# See artisan commands
php artisan list

# see routes
php artisan route:list
```

### Important Docs
[Schema data types](https://laravel.com/docs/4.2/schema)

[Eloquent model relations](https://laravel.com/docs/4.2/eloquent#relationships)
