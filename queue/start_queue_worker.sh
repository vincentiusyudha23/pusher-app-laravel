#!/bin/bash

if ! pgrep -f "php /home/vyrsite/absen.vyr23.site/artisan queue:work" > /dev/null
then
    /bin/bash /home/vyrsite/absen.vyr23.site/queue/queue_worker.sh &
fi