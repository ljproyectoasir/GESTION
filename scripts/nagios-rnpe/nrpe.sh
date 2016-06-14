#!/bin/bash
apt-get update
apt-get -y install build-essential
apt-get -y install libgd2-xpm-dev openssl libssl-dev xinetd apache2-utils unzip curl
useradd nagios
groupadd nagcmd
usermod -a -G nagcmd nagios




cd /tmp
curl -L -O http://nagios-plugins.org/download/nagios-plugins-2.1.1.tar.gz
tar xvf nagios-plugins-2.1.1.tar.gz
cd nagios-plugins-2.1.1
./configure --with-nagios-user=nagios --with-nagios-group=nagios --with-openssl
make
make install
cd /tmp
curl -L -O http://downloads.sourceforge.net/project/nagios/nrpe-2.x/nrpe-2.15/nrpe-2.15.tar.gz
tar xvf nrpe-2.15.tar.gz
cd nrpe-2.15
./configure --enable-command-args --with-nagios-user=nagios --with-nagios-group=nagios --with-ssl=/usr/bin/openssl --with-ssl-lib=/usr/lib/x86_64-linux-gnu
make all
make install
make install-xinetd
make install-daemon-config


#añadir a mano los only_from para permitir checks
#service xinetd restart

