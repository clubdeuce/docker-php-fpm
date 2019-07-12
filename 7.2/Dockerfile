FROM alpine:3.8

RUN apk update \
    && apk add --no-cache imagemagick openssl shadow pcre \
        php7-bcmath php7-ctype php7-curl \
        php7-dom php7-exif php7-fileinfo php7-fpm \
        php7-ftp php7-gd php7-gettext php7-iconv \
        php7-imagick php7-intl php7-json \
        php7-mbstring php7-mcrypt php7-mysqli \
        php7-opcache php7-openssl php7-pcntl \
        php7-pspell php7-redis php7-session php7-sockets \
        php7-sodium php7-ssh2 php7-xdebug php7-xml \
        php7-xmlreader php7-xmlrpc php7-zip

COPY files /
EXPOSE 9000
CMD ["php-fpm7", "-F"]