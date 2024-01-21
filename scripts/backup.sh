#!/bin/bash

## backup des données du server

IP=$(hostname -I | awk '{print $2}')

APT_OPT="-o Dpkg::Progress-Fancy="0" -q -y"
LOG_FILE="/vagrant/logs/backup.log"
DEBIAN_FRONTEND="noninteractive"

DBNAME="donnees"
DBUSER="donnees_user"
DBPASSWD="network"
DBHOST="192.168.56.81"
DEBIAN_FRONTEND=noninteractive

BACKUP_DIR="/vagrant/backupBDD/"
TIME=$(date +"%H-%M-%S")

# Utilisation de guillemets pour éviter des problèmes avec les espaces dans les noms de fichiers
NAME_FINAL="donnees - $TIME.sql"
CHEMIN_FINAL="$BACKUP_DIR$NAME_FINAL"

# Sauvegarde avec mysqldump
mysqldump -h $DBHOST -u $DBUSER -p$DBPASSWD $DBNAME > "$CHEMIN_FINAL"

#Installation de mariaDB    
echo "START - install MAriaDB - "$IP

echo "=> Install required packages ..."

apt-get install $APT_OPT \
    mariadb-server \
    mariadb-client \
     >> $LOG_FILE 2>&1

echo "END - install MariaDB"