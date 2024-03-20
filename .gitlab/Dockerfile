FROM php:8.2.17-cli-alpine3.19

RUN apk add --no-cache icu-libs \
    && apk add --no-cache --virtual .build-deps $PHPIZE_DEPS icu-dev

RUN docker-php-ext-install intl \
    && docker-php-ext-configure intl \
    && apk del .build-deps
