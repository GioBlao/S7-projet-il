#!/bin/bash

## 

IP=$(hostname -I | awk '{print $2}')

APT_OPT="-o Dpkg::Progress-Fancy="0" -q -y"
LOG_FILE="/vagrant/logs/install_web.log"
DEBIAN_FRONTEND="noninteractive"

echo "Configuration Reverseproxy"

#Activer les packages necessaires et desactiver ceux inutiles


#Creer un nouveau fichier de configuration 
touch /etc/apache2/sites-available/groupe11.conf

sh -c 'echo "
<VirtualHost *:80>

ServerName groupe11.com

        ProxyPass  / http://192.168.56.80/
        ProxyPassReverse / http://192.168.56.80/
        ProxyRequests Off

</VirtualHost>
" > /etc/apache2/sites-available/groupe11.conf '

#Activer le site
a2ensite groupe11.conf

echo "END - Configuration reverseproxy"



