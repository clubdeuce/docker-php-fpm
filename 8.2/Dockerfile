FROM php:8.2-fpm-alpine3.17

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN apk update \
        && apk add --no-cache imagemagick openssl shadow pcre \
        && chmod +x /usr/local/bin/install-php-extensions \
        && install-php-extensions bcmath exif gettext imagick intl gd mcrypt pcntl pspell redis xdebug zip

COPY files /