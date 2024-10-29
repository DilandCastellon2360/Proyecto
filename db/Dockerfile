FROM mysql:latest

ENV MYSQL_ROOT_PASSWORD=fdsa
ENV MYSQL_DATABASE=docker_db
ENV MYSQL_USER=angel
ENV MYSQL_PASSWORD=1234

EXPOSE 3306

COPY contacto.sql /docker-entrypoint-initdb.d/

CMD ["mysqld"]