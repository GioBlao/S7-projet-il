#!/bin/bash

##

IP=$(hostname -I | awk '{print $2}')

APT_OPT="-o Dpkg::Progress-Fancy="0" -q -y"
LOG_FILE="/vagrant/logs/install_web.log"
DEBIAN_FRONTEND="noninteractive"

key_name="groupe11.com.key"
cert_sign_request="groupe11.com.csr"
certificate_name="groupe.com.crt"

echo "Configuration openSSL"

echo "=> [1]: Installing required packages ..."
apt-get install $APT_OPT \
    apache2 \
    git \
    openssl \
    dos2unix \
      >>$LOG_FILE 2>&1
echo "=> [2]: Enabling packages"
a2enmod proxy proxy_http
a2dissite 000-default.conf

systemctl restart apache2

#Creer un nouveau fichier de configuration pour le ssl
touch /etc/apache2/sites-available/ssl.conf

sh -c 'echo "

<VirtualHost *:443>

ServerName groupe11.com

        ProxyPass  / http://192.168.56.80/
        ProxyPassReverse / http://192.168.56.80/
        ProxyRequests Off

        SSLEngine on
        SSLCertificateFile /home/vagrant/cle/groupe11.com.crt
        SSLCertificateKeyFile /home/vagrant/cle/groupe11.com.key

</VirtualHost>
" > /etc/apache2/sites-available/ssl.conf'

#Activer ssl.conf
 a2ensite ssl.conf
 systemctl restart apache2

echo "END - Configuration openSSL"