
Étape 1: Installation de XAMPP

  Tout d'abord, assurez-vous que vous avez téléchargé la dernière version de XAMPP à partir du site officiel (https://www.apachefriends.org/index.html).
  Installez XAMPP en suivant les instructions spécifiques à votre système d'exploitation (Windows, macOS, Linux).

Étape 2: Configuration de XAMPP

  Après avoir installé XAMPP, démarrez l'application.
  Assurez-vous que les services Apache et MySQL sont activés en cliquant sur les boutons "Start" correspondants dans la section "Manage Servers".
  Une fois les services activés, vous devriez voir les indications "Running" à côté de chaque service.

Étape 3: Importation de la base de données
  
  Ouvrez votre navigateur web et accédez à http://localhost/phpmyadmin/.
  Cliquez sur l'onglet "Databases" dans la barre de navigation supérieure.
  Créez une nouvelle base de données en saisissant "vincent_parrot_garage" pour celle-ci et cliquer sur "Create".
  Maintenant, cliquez sur la base de données nouvellement créée dans le volet de gauche.
  Dans le menu horizontal, sélectionnez l'onglet "Import" et choisissez le fichier vp_bdd.sql qui se trouve dans le dossier "Garage_ECF".

Étape 4: Copie des fichiers du site web
  
  Localisez le dossier "Garage_ECF" sur votre ordinateur et copiez-le dans le répertoire "htdocs" de votre installation XAMPP. Le chemin typique pour le répertoire "htdocs" est "C:\xampp\htdocs" sur Windows et "/Applications/XAMPP/htdocs/" sur macOS.
  
Étape 5: Accéder au site web
  
  Ouvrez votre navigateur web.
  Dans la barre d'adresse, tapez "http://localhost/Garage_ECF" (si vous avez placé le dossier dans le répertoire "htdocs" sans le renommer).
  Vous devriez maintenant voir le site web "Garage_ECF" s'afficher dans votre navigateur.
  Félicitations ! Vous avez maintenant réussi à utiliser le site web "Garage_ECF" avec XAMPP. Vous pouvez explorer les différentes fonctionnalités du site et tester son bon fonctionnement.

N'oubliez pas de désactiver les services Apache et MySQL de XAMPP lorsque vous n'en avez plus besoin pour des raisons de sécurité.

Je vous remercie et reste à votre disposition pour toute question supplémentaire. Bonne continuation !
