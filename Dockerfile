FROM debian:buster

#update OS packages
RUN apt -y update

WORKDIR ./ft_server

#install php
RUN apt install -y php php-cli php7.3-fpm php-cgi php-mysql \
php-curl php-gd php-mbstring php-xml php-xmlrpc php-soap php-intl php-zip

RUN apt install -y nginx default-mysql-server wordpress vim

#install and configure phpmyadmin
ADD https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.tar.gz phpmyadmin.tar.gz
RUN tar xvzf phpmyadmin.tar.gz && mv phpMyAdmin-5.0.2-all-languages /var/www/html/phpmyadmin

#config wordpress
RUN mv /usr/share/wordpress /var/www/html
COPY ./srcs/wp-config.php /var/www/html/wordpress

#config nginx
COPY ./srcs/default /etc/nginx/sites-available

#config phpmyadmin
COPY ./srcs/config.inc.php /var/www/html/phpmyadmin

#copy all neccesary files to docker container
COPY ./srcs/init_container.sh .
COPY ./srcs/init_database.sql .
COPY ./srcs/autoindex.sh .

#create ssl keys
RUN openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out /etc/ssl/certs/aherlind.crt -keyout /etc/ssl/private/aherlind.key -subj "/C=RU/ST=Moscow/L=Moscow/O=42 School/OU=aherlind/CN=html"
RUN chmod -R 600 /etc/ssl/*

#open ports for listening
EXPOSE 80 443

#run and create database
RUN service mysql start && mysql < init_database.sql

#run container
ENTRYPOINT bash init_container.sh