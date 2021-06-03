 Virtual box  
  Commande avec terminal
=======================

### Les Différentes étapes:
>Après avoir télécharger VB et vagrant

>Crée un dossier nomé VM à l'emplacement souhaité

>cd "nom du dossier"

> vagrant init 

- pour crée un fichier Vagrantfile dans le dossier
----------------

>nano Vagrantfile

 #### Configurer :  
- config.vm.box = 'ubuntu/xenial64'  
- enlever # à l'adresse priver  192.168.33.10
- enlever # à synced.folder enlever le (.) à ../data de la racine puis nomé le dossier lien en 'var/www/html'  
- pour sauvegarder et quitter "ctrl+o" puis "entrée puis "ctrl + x" 
 - config.vm.provider :virtualbox do |vb|  
  vb.name = "PHP"  
  end
---------------


>mkdir data (crée le dossier dans VM qui va servir de dossier de syncronisation)

>vagrant up 

#### Si cela ne marche pas : 

 - sudo apt install virtualbox virtualbox-qt  
 - Puis de nouveau vagrant up 
 -------

#### Passer sur le terminale de la VM:

>vagrant ssh

>cd /

>cd var/www/html/

>sudo apt update (listing des vérsions)

>sudo apt install apache2 (télécharge)

>changer le fichier index html en php  
*mv index.html index.php

>sudo apt install php7.0 -y

>sudo apt install libapache2-mod-php7.0 

#### Si probleme:

- sudo service apache2 resart
_______

>exit (pour revenir au terminal de l'ordi)

>vagrant halt (pour arreter la VM)

>vagrant relaod (pour la relancer)

>vagrant destroy (pour la supprimer -f pour supprimer la validation)


-------

## Configurations 
  
  ### Activer l'affichage des erreurs PHP
  ```bash
  sudo nano /etc/php/7.0/apache2/php.ini
  ```
  Puis faire une recherche (ctrl + w avec nano) et chercher 
  ```display_errors```
  le premier résultat n'est pas celui qu'on recherche, mais les 2 suivants, oui.
  changer les "Off" en "On".

  ## Configuration si VM
  ### Paquets à installer 
  - apache2
  - php7.0
  - libapache2-mod-php7.0
  - php-xdebug
  (ne pas oublier de finir avec un ```sudo service apache2 restart```)

  ## Résumé GIT  

  >clone : récupérer un repo depuis git, pour la 1ere fois

  >push : mettre à jour le repo git par rapport au repo local
  
  >pull : mettre à jour le repo local depuis le repo git 

