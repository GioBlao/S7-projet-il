# Projet Infrastructure et Logiciels

Les fichiers pour la mise en place du projet Infrastructure et Logiciels su semestre 7

## Les pré-requis

### Les ressources informatiques

Pour faire fonctionner ce Labs il faut prévoir au moins 2 CPU /coeurs et 4Go de Ram (8Go est plus judicieux). L'espace disque est de l'ordre des 16 Go.
La virtualisation doit être activée sur le PC hôte (machine physique )
<https://support.bluestacks.com/hc/fr-fr/articles/115003174386-Comment-puis-je-activer-la-virtualisation-VT-sur-mon-PC->

### Les applications obligatoires

* Oracle Virtualbox (version 6.1) (<https://www.virtualbox.org/wiki/Downloads>)
* Oracle VM VirtualBox Extension Pack (adapté à la version de virtualbox installée précédement)
* HashiCorp Vagrant (<https://www.vagrantup.com/>)

### Les fichiers obligatoires

* choisir le zip en haut à gauche
* cloner avec git : git clone <https://github.com/chavinje/S7-projet-il.git>

Vous trouverez les reperoires/fichiers :

* ./Vagrantfile : qui contient l'ensemble des déclarations pour la construction du Labs
* scripts/install_sys.sh : mise en place des configurations de base sur toutes les VMs
* scripts/install_bdd.sh : Mise en place de la base de données mysql
* scripts/install_moodle.sh : Mise en place de l'application Moodle
* scripts/install_myadmin.sh : Mise en place de l'application PhpMyAdmin
* scripts/install_web.sh : Mise en place du serveur Apache2

## Description du Labs

Le labs est constitué de 1 machine virtuelle Virtualbox basé sur la box fr-bull-64
Cette machine est reliée à votre machine réelle par un réseau privé hôte via l'adresse 192.168.56.80

* L'application Moodle est accéssible par l'adresse <http://192.168.56.80/moodle>
* L'application PhpMyAdmin est accéssible par l'adresse <http://192.168.56.80/myadmin>

## Utilisation des commandes vagrant

Télécharger la box modèle
    ```vagrant box add chavinje/fr-bull-64```

Activer une VM uniquement (srv-web par exemple)
    ```vagrant up srv-web```

Se connecter à une VM (firewall par exemple)
    ```vagrant ssh firewall```

Arréter une VM (victime par exemple)
    ```vagrant halt victime```

Détruire toutes les VMs (sans demande de confirmation)
    ```vagrant destroy -f```
(Aucun objet)
DICKO Aminata
​
BLAO Giovanni​

# Projet Infrastructure et Logiciels - Gestion de Statistique de Basket

 

Ce projet Vagrant déploie l'environnement pour un site internet pour afficher les statistiques lors d'une partie de Basket. Il utilise Vagrant pour gérer trois machines virtuelles distinctes, chacune remplissant un rôle spécifique.

 

## Les pré-requis

 

- Vagrant installé : [Télécharger Vagrant](https://www.vagrantup.com/downloads)

- VirtualBox ou un autre fournisseur de boîtes Vagrant : [VirtualBox](https://www.virtualbox.org/)

 

## Configuration des VMs

 

1. **VM Web (srv-web)**

 

   - Cette VM héberge le site internet .

   - IP: `192.168.56.80`

   - Accès au site : [http://192.168.56.80](http://192.168.56.80)

 

2. **VM Base de Données (srv-database)**

 

   - Cette VM héberge la base de données du site et de l'application de bureau et la sauvegarde de données.

   - IP: `192.168.56.81`

 

3. **VM de Backup (srv-proxyhttps)**

 

   - Cette VM sert de pont pour la communication entre le réseau ESEO et la VM web.

   - IP: `192.168.56.82`

 



 

### Instructions d'utilisation

 

Pour démarrer les VMs :

`vagrant up`

 

## Structure du Dossier

 

- **Vagrantfile**: Le fichier de configuration Vagrant qui spécifie les détails des machines virtuelles et leur configuration.

 

- **scripts/**: Ce répertoire contient les scripts de provisionnement pour chaque VM. Les scripts peuvent inclure des tâches telles que l'installation d'apache2 ou de la BDD.

 

- **Files/**: Documents nécessaires pour la mise en place de la base de données.

 

- **Files/**: Les fichiers du site internet du fleuriste. Assurez-vous de mettre à jour les configurations de base de données dans le code si nécessaire.

 

## Utilisation des commandes vagrant

 

Télécharger la box modèle

`vagrant box add chavinje/fr-bull-64`

 

Activer une VM uniquement (srv-web par exemple)

`vagrant up srv-web`

 

Se connecter à une VM (firewall par exemple)

`vagrant ssh firewall`

 

Arréter une VM (victime par exemple)

`vagrant halt victime`

 

Détruire toutes les VMs (sans demande de confirmation)

`vagrant destroy -f`
