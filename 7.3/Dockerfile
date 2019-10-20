FROM alpine:3.10

RUN apk update \
    && addgroup -S vagrant && adduser -S vagrant -G vagrant \
    && apk add --no-cache imagemagick openssl shadow pcre \
        php7-bcmath=7.3.10-r0 php7-ctype=7.3.10-r0 php7-curl=7.3.10-r0 \
        php7-dom=7.3.10-r0 php7-exif=7.3.10-r0 php7-fileinfo=7.3.10-r0 php7-fpm=7.3.10-r0 \
        php7-ftp=7.3.10-r0 php7-gd=7.3.10-r0 php7-gettext=7.3.10-r0 php7-iconv=7.3.10-r0 \
        php7-imagick=3.4.4-r1 php7-intl=7.3.10-r0 php7-json=7.3.10-r0 \
        php7-mbstring=7.3.10-r0 php7-mcrypt=1.0.2-r1 php7-mysqli=7.3.10-r0 \
        php7-opcache=7.3.10-r0 php7-openssl=7.3.10-r0 php7-pcntl=7.3.10-r0 \
        php7-pspell=7.3.10-r0 php7-pecl-redis=4.3.0-r2 php7-session=7.3.10-r0 php7-sockets=7.3.10-r0 \
        php7-sodium=7.3.10-r0 php7-ssh2=1.1.2-r5 php7-xdebug=2.7.2-r1 php7-xml=7.3.10-r0 \
        php7-xmlreader=7.3.10-r0 php7-xmlrpc=7.3.10-r0 php7-zip=7.3.10-r0

COPY files /
EXPOSE 9000
CMD ["php-fpm7", "-F"]