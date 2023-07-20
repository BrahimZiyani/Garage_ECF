<?php
// Démarrer la session
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vincent_parrot_garage";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Vérifier si le paramètre 'deconnexion' est présent dans l'URL
if (isset($_GET['deconnexion']) && $_GET['deconnexion'] == true) {
    // Détruire la session
    session_destroy();
    // Rediriger vers la page de connexion
    header("location: login.php");
    exit;
}

// Vérifier si l'utilisateur est connecté
if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    echo "<a href='add_vehicles.php'>Ajouter véhicule </a>";
    echo "<a href='profil.php'>Profil </a>";
    echo "<a href='index.php?deconnexion=true'><span> Déconnexion</span></a>";
} else {
    // Si l'utilisateur n'est pas connecté, afficher le lien de connexion
    echo "<a href='login.php'>Se connecter</a>";
}


?>

