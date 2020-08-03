FROM mariadb:10.5
COPY docker/db/init.sql /docker-entrypoint-initdb.d/init.sql
COPY docker/db/local.cnf /etc/mysql/conf.d/local.ini
CMD ["mysqld"]