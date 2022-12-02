FROM mysql:8.0

WORKDIR /docker-entrypoint-initdb.d

COPY ./src/exam.sql . 

#Expose port 80 on the docker container
EXPOSE 3306