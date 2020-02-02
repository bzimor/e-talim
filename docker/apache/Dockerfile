FROM yiisoftware/yii2-php:7.2-apache

RUN apt-get update && \
    apt-get install --no-install-recommends --no-install-suggests -q -y vim wget unzip git zip



RUN curl -sS https://getcomposer.org/installer | php -- \
        --filename=composer \
        --install-dir=/usr/local/bin && \
        echo "alias composer='composer'" >> /root/.bashrc && \
        composer


RUN a2enmod rewrite

RUN service apache2 restart

WORKDIR /app