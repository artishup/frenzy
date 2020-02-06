#!/bin/bash

echo Uploading Application container
docker-compose up --build -d

echo Install dependencies
docker run --rm --interactive --tty -v $PWD:/app composer install

echo Make migrations
docker exec -it frenzy-php php /var/www/html/artisan migrate

echo Information of new containers
docker ps -a
