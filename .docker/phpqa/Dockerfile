FROM php:7-alpine

# Add PHP extension
RUN apk add --update libxslt-dev && docker-php-ext-install xsl

# Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" &&\
    php composer-setup.php &&\
    rm composer-setup.php &&\
    mkdir /composer &&\
    php composer.phar global require --prefer-dist --no-scripts --prefer-stable --no-progress --optimize-autoloader --no-interaction --no-ansi --no-plugins --working-dir=/composer \
        phpunit/phpunit="^6.5" \
        edgedesign/phpqa="^1.18" \
        phpstan/phpstan="^0.9.2" \
        vimeo/psalm="^1.1" \
        jakub-onderka/php-parallel-lint="^1.0"