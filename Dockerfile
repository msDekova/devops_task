FROM php:7.0-apache

WORKDIR /var/www/html

RUN apt update && apt -y upgrade \
  && apt -y install vim
RUN apt-get install -y libpq-dev \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql

COPY ./src/index.php . 

#Expose port 80 on the docker container
EXPOSE 80
