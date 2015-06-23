FROM debian:latest

ENV DEBIAN_FRONTEND noninteractive
# TODO change to ubuntu 
RUN apt-get update && apt-get -y install \
	php5 \
	php-pear \
	php5-gd \
	php5-sqlite \
	php5-pgsql \
	php5-mysql \
	php5-mcrypt \
	php5-xcache \
	php5-xmlrpc \
	php5-fpm

RUN sed -i '/^listen /c listen = 0.0.0.0:9000' /etc/php5/fpm/pool.d/www.conf
RUN sed -i '/^cgi.fix_pathinfo /c cgi.fix_pathinfo = 0;' /etc/php5/fpm/pool.d/www.conf
RUN ln -sf /dev/stderr /var/log/php5-fpm.log

RUN mkdir -p /var/www/html && \
    chown -R www-data:www-data /var/www/html

EXPOSE 9000

CMD ["php5-fpm", "--nodaemonize"]
