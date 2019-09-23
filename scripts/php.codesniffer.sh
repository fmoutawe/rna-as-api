#!/usr/bin/env bash

docker-compose run php ./vendor/bin/phpcs --standard=PSR2 ./src/RNA/
