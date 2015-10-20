#!/usr/bin/env bash
cd nginx
docker build -t tutorial/nginx .
cd ../
docker pull nmcteam/php56
docker pull sameersbn/mysql
cd code
composer install