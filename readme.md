# Docker commands

```sh

# Debug

docker-compose exec app php artisan key:generate
docker-compose ps
docker-compose logs webserver
docker-compose exec app tail -f storage/logs/laravel.log
docker-compose exec app php artisan config:clear
docker-compose exec app php artisan cache:clear
docker-compose exec app php artisan route:clear
docker-compose exec app php artisan view:clear
docker-compose exec app chmod -R 775 storage
docker-compose exec app chmod -R 775 bootstrap/cache
docker-compose exec app chown -R www-data:www-data storage
docker-compose exec app chown -R www-data:www-data bootstrap/cache

# Setup

docker-compose exec app composer install
docker-compose exec app php artisan migrate

```