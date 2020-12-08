#!/bin/bash

chown -R www-data /var/www/*
chmod -R 755 /var/www/*

service php7.3-fpm start
service nginx start
service mysql start

bash