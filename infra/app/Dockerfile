FROM php:7.2.5-fpm

RUN apt-get update && apt-get install -y \
    libmcrypt-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    mysql-client \
    sudo \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd zip && \

    # zip, unzip
    apt-get install -y zip unzip && \

    # vim
    apt-get install -y vim && \

    # rsync
    apt-get install -y rsync ssh && \

    # composer
    curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer && \

    # install grpc
    pecl install grpc && \
    docker-php-ext-enable grpc && \

    # add user
    useradd -m -s /bin/bash -u 500 mush

# set timezone
RUN cp /etc/localtime /etc/localtime.org && \
    ln -sf  /usr/share/zoneinfo/Asia/Tokyo /etc/localtime

# www.conf
ADD ./www.conf /usr/local/etc/php-fpm.d/www.conf

WORKDIR /var/www
