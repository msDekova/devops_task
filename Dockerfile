FROM php:7.0-apache

WORKDIR /var/www/html

RUN apt update && apt -y upgrade \
  && apt -y install vim php-mysqlnd

COPY ./src/ . 

#Expose port 80 on the docker container
EXPOSE 80
