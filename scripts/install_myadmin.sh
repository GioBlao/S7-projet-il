#!/bin/bash

## install PhpMyAdmin Application

IP=$(hostname -I | awk '{print $2}')

APT_OPT="-o Dpkg::Progress-Fancy="0" -q -y"
LOG_FILE="/vagrant/logs/install_myadmin.log"
DEBIAN_FRONTEND="noninteractive"
MYADMIN_VERSION="5.1.1"
WWW_REP="/var/www/html"

echo "START - Installation of phpMyAdmin - "$IP

echo "=> [1]: Install required packages ...."
apt-get install $APT_OPT \
  openssl \
  php-mbstring \
  php-zip \
  php-gd \
  php-xml \
  php-pear \
  php-gettext \
  php-cgi \
>> $LOG_FILE 2>&1
#
#sudo apt-get install debconf-utils -y

#echo 'phpmyadmin phpmyadmin/reconfigure-webserver multiselect apache2' | sudo debconf-set-selections
#echo 'phpmyadmin phpmyadmin/dbconfig-install boolean true' | sudo debconf-set-selections
#echo 'phpmyadmin phpmyadmin/mysql/admin-pass password network' | sudo debconf-set-selections
#echo 'phpmyadmin phpmyadmin/mysql/app-pass password network' | sudo debconf-set-selections
#echo 'phpmyadmin phpmyadmin/app-password-confirm password network' | sudo debconf-set-selections

#sudo apt-get install phpmyadmin -y
#
echo "=> [2]: Download files"
wget -q -O /tmp/myadmin.zip \
  https://files.phpmyadmin.net/phpMyAdmin/${MYADMIN_VERSION}/phpMyAdmin-${MYADMIN_VERSION}-all-languages.zip \
  >> $LOG_FILE 2>&1

unzip /tmp/myadmin.zip -d ${WWW_REP} \
>> $LOG_FILE 2>&1

rm /tmp/myadmin.zip

echo "[3] - Configuration files for phpmyadmin  "
ln -s ${WWW_REP}/phpMyAdmin-${MYADMIN_VERSION}-all-languages ${WWW_REP}/myadmin
mkdir ${WWW_REP}/myadmin/tmp
chown www-data:www-data ${WWW_REP}/myadmin/tmp
randomBlowfishSecret=$(openssl rand -base64 32)
sed -e "s|cfg\['blowfish_secret'\] = ''|cfg['blowfish_secret'] = '$randomBlowfishSecret'|" \
  ${WWW_REP}/myadmin/config.sample.inc.php \
  > ${WWW_REP}/myadmin/config.inc.php

mysql -e "CREATE DATABASE phpmyadmin"
mysql -e "GRANT ALL PRIVILEGES ON phpmyadmin.* TO 'moodle_user'@'192.168.56.81' IDENTIFIED BY 'network'"
mysql < ${WWW_REP}/myadmin/sql/create_tables.sql 

echo "[4] Restarting Apache..."
service apache2 restart

#Accès à la BBD  depuis n'importe ou
sed -i 's/localhost/192.168.56.81/g' /${WWW_REP}/phpMyAdmin-${MYADMIN_VERSION}-all-languages/config.inc.php
cat <<EOF
Service installed at http://192.168.56.80/myadmin/

You will need to add a hosts file entry for:

username: moodle_user
password: network

EOF

echo "END - Configuration phpMyAdmin"
