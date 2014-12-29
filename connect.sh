#!/bin/sh

recipient="$1@connect.ust.hk"
rand=$(tr -dc A-Za-z0-9 < /dev/urandom | head -c 7 | xargs)

content="Your username:$1 \nYour password: $rand"

echo "$1	*	$rand	*">>/etc/ppp/chap-secrets 
echo $content|mutt $recipient -s "VPN Account"

sh ./vpnrestart.sh
