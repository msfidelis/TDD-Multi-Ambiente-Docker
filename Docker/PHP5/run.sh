#nohup php -S 0.0.0.0:80 -t foo/ /var/www/html > /tmp/phpd.log 2>&1 &
cd /var/www/html; sleep 2; phpunit --debug --log-json /tmp/logs/php5.json;
