<?php
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name = 'vincent_parrot_garage';
    $db_host = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die('could not connect to database');

    // On applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($db, htmlspecialchars($_POST['username']));
    $password = mysqli_real_escape_string($db, htmlspecialchars($_POST['password']));

    if ($username !== "" && $password !== "") {
        $requete = "SELECT id, nom, prenom FROM Employes WHERE 
            adresse_email = '" . $username . "' AND mot_de_passe = '" . $password . "'";
        $exec_requete = mysqli_query($db, $requete);
        $reponse = mysqli_fetch_array($exec_requete);
        $id = $reponse['id'];
        $nom = $reponse['nom'];
        $prenom = $reponse['prenom'];
        if ($id > 0) {
            // Nom d'utilisateur et mot de passe corrects
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $id;
            $_SESSION['nom'] = $nom;
            $_SESSION['prenom'] = $prenom;
            header('Location: principale.php');
        } else {
            // Utilisateur ou mot de passe incorrect
            header('Location: login.php?erreur=1');
        }
    } else {
        // Utilisateur ou mot de passe vide
        header('Location: login.php?erreur=2');
    }
} else {
    header('Location: login.php');
}




mysqli_close($db); // Fermer la connexion
