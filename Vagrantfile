# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  # Serveur virtuel de démonstration
  ##
  #Premiere machine virtuelle pour le serveur web, definition de la forme (visuel tout ça) de la machine virtuelle
  #Definition de la machine pour le web
  config.vm.define "srv-web" do |machine|
    machine.vm.hostname = "srv-web"
    machine.vm.box = "chavinje/fr-bull-64"
    machine.vm.network :private_network, ip: "192.168.56.80"
    # Un repertoire partagé est un plus mais demande beaucoup plus
    # de travail - a voir à la fin
    #machine.vm.synced_folder "./data", "/vagrant_data", SharedFoldersEnableSymlinksCreate: false

    #configuration virtualbox
    machine.vm.provider :virtualbox do |v|
      v.customize ["modifyvm", :id, "--name", "srv-web"]
      v.customize ["modifyvm", :id, "--groups", "/S7-projet"]
      v.customize ["modifyvm", :id, "--cpus", "1"]
      v.customize ["modifyvm", :id, "--memory", 2*1024]
      v.customize ["modifyvm", :id, "--natdnshostresolver1", "off"]
      v.customize ["modifyvm", :id, "--natdnsproxy1", "off"]
    end 

    #cette partie configure le fond (systeme d'exploitation) de la machine virtuelle
    config.vm.provision "shell", inline: <<-SHELL
      sed -i 's/ChallengeResponseAuthentication no/ChallengeResponseAuthentication yes/g' /etc/ssh/sshd_config    
      sleep 3
      service ssh restart
    SHELL
    machine.vm.provision "shell", path: "scripts/install_sys.sh"
    machine.vm.provision "shell", path: "scripts/install_web.sh"
    #machine.vm.provision "shell", path: "scripts/install_bdd.sh"
    #machine.vm.provision "shell", path: "scripts/install_moodle.sh"
    #machine.vm.provision "shell", path: "scripts/install_myadmin.sh"
  end
#Deuxieme machine virtuelle pour la base de donnees
  config.vm.define "srv-database" do |machinebdd|
    machinebdd.vm.hostname = "srv-database"
    machinebdd.vm.box = "chavinje/fr-bull-64"
    machinebdd.vm.network :private_network, ip: "192.168.56.81"

    machinebdd.vm.provider :virtualbox do |vbdd|
      vbdd.customize ["modifyvm", :id, "--name", "srv-database"]
      vbdd.customize ["modifyvm", :id, "--groups", "/S7-projet"]
      vbdd.customize ["modifyvm", :id, "--cpus", "1"]
      vbdd.customize ["modifyvm", :id, "--memory", 1024]
      vbdd.customize ["modifyvm", :id, "--natdnshostresolver1", "off"]
      vbdd.customize ["modifyvm", :id, "--natdnsproxy1", "off"]
    end   
    config.vm.provision "shell", inline: <<-SHELL
      sed -i 's/ChallengeResponseAuthentication no/ChallengeResponseAuthentication yes/g' /etc/ssh/sshd_config    
      sleep 3
      service ssh restart
    SHELL
    machinebdd.vm.provision "shell", path: "scripts/install_sys.sh"
    machinebdd.vm.provision "shell", path: "scripts/install_bdd.sh"
    machinebdd.vm.provision "shell", path: "scripts/install_web.sh"
    
  end

  #Troisieme machine virtuelle pour le backup
  config.vm.define "srv-backup" do |machinebackup|
    machinebackup.vm.hostname = "srv-backup"
    machinebackup.vm.box = "chavinje/fr-bull-64"
    machinebackup.vm.network :private_network, ip: "192.168.56.82"

    machinebackup.vm.provider :virtualbox do |vback|
      vback.customize ["modifyvm", :id, "--name", "srv-backup"]
      vback.customize ["modifyvm", :id, "--groups", "/S7-projet"]
      vback.customize ["modifyvm", :id, "--cpus", "1"]
      vback.customize ["modifyvm", :id, "--memory", 1024]
      vback.customize ["modifyvm", :id, "--natdnshostresolver1", "off"]
      vback.customize ["modifyvm", :id, "--natdnsproxy1", "off"]
    end

    config.vm.provision "shell", inline: <<-SHELL
    sed -i 's/ChallengeResponseAuthentication no/ChallengeResponseAuthentication yes/g' /etc/ssh/sshd_config    
    sleep 3
    service ssh restart
    SHELL
    machinebackup.vm.provision "shell", path: "scripts/install_sys.sh"
    #machinebackup.vm.provision "shell", path: "scripts/install_bdd.sh"
    machinebackup.vm.provision "shell", path: "scripts/backup.sh"
   
  end

end
