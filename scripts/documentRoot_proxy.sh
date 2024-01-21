#!/bin/bash

#Change le chemin de la racine du site web
sed -i 's//var/www/html//var/www/html/site/projetinfralog-site-masterD/g' /etc/apache2/sites-available/000-default.conf
systemctl restart apache2
