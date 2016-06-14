#!/bin/bash

# IP del host a hacer el deploy
IP_DESTINO=10.0.20.20

INSTALL="no"
NAME=""

if [ $INSTALL = "yes"  ];then

	ssh 10.0.0.2 "echo -e 'auto lo \niface lo inet loopback \n\nauto eth0 \niface eth0 inet static \naddress ${IP_DESTINO} \nnetmask 255.0.0.0 \ngateway 10.0.0.1' > /etc/network/interfaces"

	ssh 10.0.0.2 "/etc/init.d/networking restart" 2> dev/null > /dev/null

	ssh ${IP_DESTINO} "apt-get update" 2> /dev/null #> /dev/null
	ssh ${IP_DESTINO} "apt-get install nginx php5-fpm mysql-cli -y" #2> /dev/null > /dev/null
	ssh 192.168.1.220 "echo 'server ${NAME} ${IP_DESTINO}:80 check inter 2000 rise 2 fall 3 ' >> /etc/haproxy/haproxy.cfg "
	ssh 192.168.1.210 "echo 'server ${NAME} ${IP_DESTINO}:80 check inter 2000 rise 2 fall 3 ' >> /etc/haproxy/haproxy.cfg "
	ssh 192.168.1.215 "/etc/init.d/heartbeat restart"

fi

rsync -ae ssh /root/scripts/web/nginx/nginx.conf root@${IP_DESTINO}:/etc/nginx/
rsync -ae ssh /root/scripts/web/nginx/default root@${IP_DESTINO}:/etc/nginx/sites-available/
rsync -ae ssh /root/scripts/web/nginx/elmuro.conf root@${IP_DESTINO}:/etc/nginx/sites-available/

ssh ${IP_DESTINO} "ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default" 2> /dev/null
ssh ${IP_DESTINO} "ln -s /etc/nginx/sites-available/elmuro.conf /etc/nginx/sites-enabled/elmuro.conf" 2>  /dev/null


rsync -ae ssh /root/scripts/web/php-fpm/php.ini root@${IP_DESTINO}:/etc/php5/fpm/
rsync -ae ssh /root/scripts/web/php-fpm/php-fpm.conf root@${IP_DESTINO}:/etc/php5/fpm/
rsync -ae ssh /root/scripts/web/php-fpm/www.conf root@${IP_DESTINO}:/etc/php5/fpm/pool.d/



rsync -ae ssh /home/web/* root@${IP_DESTINO}:/var/www/elmuro/

ssh ${IP_DESTINO} "rm -rf /var/www/html/*" 2> /dev/null

ssh ${IP_DESTINO} "echo 'OK' > /var/www/html/haproxy.html" 2> /dev/null > /dev/null

#ssh ${IP_DESTINO} "echo '  <?php header("HTTP/1.1 301 Moved Permanently", TRUE, 301); @header("Location: http://elmuro.ddns.net"); ?>" 2> /dev/null > /dev/null
ssh ${IP_DESTINO} "echo '<br><h1><center>BIENVENIDO AL SERVIDOR DEL PROYECTO LJ</center></h1>' > /var/www/html/index.html" 2> /dev/null > /dev/null

ssh ${IP_DESTINO} "chown -R www-data:www-data /var/www/*/*" 2> /dev/null

ssh ${IP_DESTINO} "mkdir /var/log/nginx/elmuro/" 2> /dev/null
ssh ${IP_DESTINO} "chown www-data:adm /var/log/nginx/elmuro"

ssh ${IP_DESTINO} "/etc/init.d/nginx restart" 2> /dev/null > /dev/null
ssh ${IP_DESTINO} "/etc/init.d/php-fpm restart" 2> /dev/null > /dev/null


