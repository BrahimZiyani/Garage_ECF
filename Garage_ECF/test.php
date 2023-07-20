<!DOCTYPE html>
<html>
<head>
    <title>Détails du véhicule</title>

    <style>
    /* Styles CSS */
    * {
      box-sizing: border-box;
      }
    
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      min-height: 100vh;
    }

    .navbar {
      background-color: #f2f2f2;
      display: flex;
      align-items: center;
      padding: 10px;
      border-bottom: 1px solid black;
    }

    .navbar-logo {
      margin-right: 20px;
    }

    .navbar-logo a {
      display: flex;
      align-items: center;
      color: #333;
      text-decoration: none;
    }

    .navbar-logo img {
      width: 75px;
      height: 75px;
      margin-right: 5px;
    }

    .navbar-links {
      flex-grow: 1;
      text-align: center;
    }

    .navbar-links a {
      font-weight: bolder;  
      margin-right: 10px;
      color: orange;
      text-decoration: none;
    }

    .navbar-links a:hover {
      text-decoration: underline;
    }

    .navbar-login {
      margin-left: auto;
    }

    .navbar-login a {
      font-weight: bolder;   
      color: orange;
      text-decoration: none;
    }

    h1{
        text-align: center;
    }

    img{
        display: block;
        margin: 0 auto;
        width: 500px;
    }
    
    .car-details {
      text-align: center;
      margin-top: 50px;
    }

    .car-image {
      margin-bottom: 20px;
    }

    .car-table {
      margin: 0 auto;
      border-collapse: collapse;
      border: 1px solid orange;
    }

    .car-table th,
    .car-table td {
      padding: 12px;
      border-bottom: 1px solid orange;
    }

    .car-table th {
      background-color: orange;
      font-weight: bold;
      text-align: left;
    }

    .contact{  
      border: 2px solid orange;
      margin: 15px auto;
      padding: 1em 2.2em;
      border-radius: 3em;
      background-color: orange;
    }

    .footer {
      position: sticky;
      top: 100%;
      width: 100%;
      background-color: #000;
      color: orange;
      padding: 20px;
      text-align: center;
    }

    .footer p {
      margin: 0;
    }

    </style>

</head>
<body>

<nav class="navbar">
    <div class="navbar-logo">
      <a href="index.php">
        <img src="img/Logo.png" alt="Logo">
      </a>
    </div>

    <div class="navbar-links">
      <a href="voitures.php">Voitures</a>
      <a href="contact.php">Contact</a>
      <a href="reperations.php">Réparations</a>
    </div>

    <div class="navbar-login">
    <?php include 'header.php'; ?>
    </div>
  </nav>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vincent_parrot_garage";
$id = $_GET['id'];
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

if (isset($id)) {
    $sql = "SELECT * FROM Vehicles WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>

            <div class="car-details">
                <div class="car-image">
                    <img src='<?=$row['pics'];?>' alt='Image du véhicule'>
                </div>
            <table class="car-table">
            <thead>
            <tr>
                <th>Caractéristique</th>
                <th>Valeur</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Marque</td>
                <td><?=$row['brand'];?></td>
            </tr>
            <tr>
                <td>Modèle</td>
                <td><?=$row['model'];?></td>
            </tr>
            <tr>
                <td>Année de fabrication</td>
                <td><?=$row['year'];?></td>
            </tr>
            <tr>
                <td>Couleur</td>
                <td><?=$row['color'];?></td>
            </tr>
            <tr>
                <td>Prix</td>
                <td><?=$row['price'];?> €</td>
            </tr>
            <tr>
                <td>Kilométrage</td>
                <td><?=$row['mileage'];?> Km</td>
            </tr>
            </tbody>
            <button class="contact">06 58 79 69 73</button>
            <button class="contact">vincent.parrot@gmail.fr</button>
            </table>
        </div>    
        <?php



    } else {
        echo "Aucun véhicule trouvé avec cet ID.";
    }
} else {
    echo "L'ID du véhicule n'est pas spécifié.";
}

$conn->close();
?>

<footer class="footer">
    <p>Tous droits réservés &copy; 2023 Garage Vincent Parrot</p>
</footer>

</body>
</html>