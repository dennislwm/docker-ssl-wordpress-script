FROM php:7.3-fpm

# Set working directory
WORKDIR /var/www

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    default-mysql-client \
    libpng-dev \
    libxslt-dev libxml2-dev libpam-dev libedit-dev \
    libjpeg62-turbo-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    npm \
    nano \
    iputils-ping \
    net-tools \
    nodejs \
    curl


# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install mysqli pdo_mysql mbstring exif pcntl pdo bcmath
RUN docker-php-ext-configure gd --with-gd --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include/

RUN docker-php-ext-install gd


RUN cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/conf.d/php.ini

RUN echo "upload_max_filesize=100M" >> /usr/local/etc/php/conf.d/php.ini && \
    echo "post_max_size=100M" >> /usr/local/etc/php/conf.d/php.ini && \
    echo "memory_limit=512M" >> /usr/local/etc/php/conf.d/php.ini


# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copy existing application directory permissions
COPY --chown=www:www . /var/www

# Change current user to www
USER www

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]