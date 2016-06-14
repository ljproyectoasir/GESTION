#!/bin/bash
mkdir /tmp/www
rm -rf /tmp/www/*
cd /tmp/www
#wget -r --ftp-user=web --ftp-password=tronos ftp://nedstark.got
wget -r -R ".*" --ftp-user=web --ftp-password=tronos ftp://nedstark.got
rm -rf /var/www/html/*
mv /tmp/www/nedstark.got/* /var/www/html
rm -rf /tmp/www

