FROM php:7.0-apache

WORKDIR /var/www/html

RUN apt update && apt -y upgrade \
  && apt -y install vim

COPY ./src/index.php index.php 

#Expose port 80 on the docker container
EXPOSE 80
