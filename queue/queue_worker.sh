#!/bin/bash

while true
do
    /opt/cpanel/ea-php82/root/usr/bin/php /home/vyrsite/absen.vyr23.site/artisan queue:work --sleep=3 --tries=3
    sleep 5
done