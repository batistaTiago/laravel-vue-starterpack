#/bin/sh
docker-compose up -d;
docker-compose exec php service cron start;