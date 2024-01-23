#!/bin/bash


#  adresses des VMs et le nom d'utilisateur
VM1_ADDRESS="192.168.56.80"
VM2_ADDRESS="192.168.56.81"
USERNAME="vagrant"  # Le nom d'utilisateur déjà présent sur les VMs
USERNAMEVM="dev" 
PASSWORD="dev"

# Options SSH pour éviter la vérification de la clé de l'hôte
SSH_OPTIONS="-o StrictHostKeyChecking=no"

echo "START - Distribution cle dans les autres VMS pour Bastion - "

sudo apt-get install sshpass
sudo a2enmod ssl

# Générer la paire de clés SSH
#sudo ssh-keygen -t rsa -b 4096 -f ~/.ssh/id_rsa -N ""

#Copie de la clé privée vers le reperoitre .ssh du reverseroxy
sudo cp -v /vagrant/Bastion_Keys/id_rsa /home/vagrant/.ssh/


echo "END - Distribution cle dans les autres VMS pour Bastion:)"
