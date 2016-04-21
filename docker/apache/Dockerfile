FROM tutum/apache-php

RUN apt-get update && apt-get install -yq git && rm -rf /var/lib/apt/lists/*
RUN sudo a2enmod rewrite && sudo service apache2 restart
ADD resources/000-default.conf /etc/apache2/sites-available/000-default.conf
CMD curl -sS https://getcomposer.org/installer | php && composer self-update && cd /app/sources && composer install && /etc/init.d/apache2 restart && sleep inf