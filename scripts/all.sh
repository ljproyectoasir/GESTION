#! /bin/bash

declare -a IP

IP[0]='10.0.10.10'
IP[1]='10.0.10.20'
IP[2]='10.0.20.10'
IP[3]='10.0.20.20'
#IP[4]='10.0.20.30'
IP[5]='10.0.30.10'
IP[6]='10.0.30.20'
IP[7]='10.0.40.10'
IP[8]='10.0.40.20'
IP[9]='10.0.40.30'
IP[10]='130.211.105.161'
IP[11]='52.48.78.193'
IP[12]='192.168.1.202'
IP[14]='10.0.60.10'
IP[13]='104.196.127.49'



SCRIPT=$1

CONT=${#IP[@]}
for (( i=0 ; i<=$CONT ; i=i+1 )); do

	#mkdir /root/scripts
	#scp iptables/firewall.sh ${IP[i]}:/root/scripts/
	#scp /root/scripts/backups/backups_daily.sh ${IP[i]}:/root/scripts/
	#scp backups/rsync-backups.sh ${IP[i]}:/root/scripts/
	#rsync /etc/nagios-nrpe ${IP[i]}:/etc/
	ssh ${IP[i]} 'bash -s' < $SCRIPT
	echo ${IP[i]}

done


