#!/bin/sh
mkdir -p /run/php
chmod 0755 /run/php
chown www-data:www-data /run/php

exec /sbin/setuser root /usr/sbin/php-fpm -F --fpm-config /etc/php7/fpm/php-fpm.conf >> /var/log/php-fpm.log 2>&1
