<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site de revente de voitures</title>
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

    .car-carousel {
      margin-top: 20px;
      width: 100%;
      overflow: hidden;
      position: relative;
    }

    .car-slider {
      white-space: nowrap;
      transition: transform 0.3s ease-in-out;
      position: relative;
    }

    .car {
      display: inline-block;
      width: 100%;
      max-width: 100%;
      margin: 0 -5px; /* Ajustement des marges */
      text-align: center;
    }

    .car img {
      width: 500px;
      height: 250px;
    }

    .car p {
      font-family: "Arial", sans-serif;
      font-size: 16px;
      line-height: 1.4;
      margin: 10px 0;
      font-weight: bolder;
    }

    .car h3, .car a {
      text-decoration: none;
      color: black;
    }


    .slider-arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 40px;
      height: 40px;
      background-color: rgba(245, 172, 90, 0.3);
      color: #fff;
      border-radius: 50px;
      font-size: 24px;
      text-align: center;
      line-height: 40px;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }

    .slider-arrow:hover {
      background-color: rgba(255, 187, 0, 0.5);
    }

    .slider-arrow.left {
      left: 500px;
    }

    .slider-arrow.right {
      right: 500px;
    }

    .site-description { 
      text-align: center;
      margin: 50px 500px 0 500px;
      border: 2px solid orange;
      border-radius: 10px;
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

    .content{
      text-align: center;
    }

  </style>
  <!-- HTML -->
</head>
<body>
  <nav class="navbar">
    <div class="navbar-logo">
      <a href="">
        <img href="index.html" src="img\Logo.png" alt="Logo">
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
  
 <!-- tester si l'utilisateur est connecté -->




  <?php
    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vincent_parrot_garage";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}


// Requête SQL pour récupérer les données des véhicules
$sql = "SELECT * FROM Vehicles";
$result = $conn->query($sql);
?> 

<div class="car-carousel">
  <div class="car-slider">
    <?php
    // Boucle pour parcourir les résultats de la requête
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $pics = $row['pics'];
        $brand = $row['brand'];
        $model = $row['model'];
        $couleur = $row['color'];
        $mileage = $row['mileage'];
        $energy = $row['energy'];
        $year = $row['year'];
        $price = $row['price'];
        $url = "test.php"."?id=$id";
    ?>
    <div class="car">
      <a href="<?=$url;?>">
        <img src="<?=$pics;?>" alt="<?=$brand;?> <?=$model;?>">
        <h3><?=$brand;?> <?=$model;?></h3>
        <p>Couleur : <?=$couleur;?></p>
        <p>Kilométrage : <?=$mileage;?></p>
        <p>Énergie : <?=$energy;?></p>
        <p>Année : <?=$year;?></p>
        <p>Prix : <?=$price;?> €</p>
      </a>
    </div>
    <?php
    }
    ?>
  </div>
  
  <div class="slider-arrow left" onclick="slideLeft()">‹</div>
  <div class="slider-arrow right" onclick="slideRight()">›</div>
</div>



<?php
$conn->close();
?>   


  <div class="site-description">
    <h2 style="border-bottom: 2px solid orange; padding-bottom: 10px;">Bienvenue sur notre site de revente de voitures d'occasion</h2>
    <p style="margin-top: 20px;">Le garage Vincent Parrot, fort de ses 15 années d'expérience dans la réparation automobile, a ouvert
      son propre garage à Toulouse en 2021.
      Depuis 2 ans, il propose une large gamme de services: réparation de la carrosserie et de la
      mécanique des voitures ainsi que leur entretien régulier pour garantir leur performance et
      leur sécurité. De plus, le Garage V. Parrot met en vente des véhicules d'occasion </p>
  </div>

  <footer class="footer">
    <p>Tous droits réservés &copy; 2023 Garage Vincent Parrot</p>
  </footer>

  <!-- SCRIPT JS -->
 
 <script>
    const slider = document.querySelector('.car-slider');
    const cars = Array.from(document.querySelectorAll('.car'));
    const carWidth = cars[0].clientWidth;
    const numVisibleCars = 1; // Nombre de voitures visibles à la fois
    const numTotalCars = cars.length;
    let slideIndex = 0;

    function slideLeft() {
      slideIndex--;
      if (slideIndex < 0) {
        slideIndex = numTotalCars - numVisibleCars;
      }
      updateSliderPosition();
    }

    function slideRight() {
      slideIndex++;
      if (slideIndex > numTotalCars - numVisibleCars) {
        slideIndex = 0;
      }
      updateSliderPosition();
    }

    function updateSliderPosition() {
      const position = -slideIndex * carWidth;
      slider.style.transform = `translateX(${position}px)`;
    }

    function searchCars() {
      const brand = document.querySelector('.search-input:nth-of-type(1)').value.toLowerCase();
      const minPrice = parseFloat(document.querySelector('.search-input:nth-of-type(2)').value);
      const maxPrice = parseFloat(document.querySelector('.search-input:nth-of-type(3)').value);
      
      const filteredCars = cars.filter(car => {
        const carBrand = car.querySelector('p:nth-of-type(4)').textContent.toLowerCase();
        const carPrice = parseFloat(car.querySelector('p:nth-of-type(3)').textContent.replace(/\D/g, ''));
        
        if ((brand === '' || carBrand.includes(brand)) &&
            (!minPrice || carPrice >= minPrice) &&
            (!maxPrice || carPrice <= maxPrice)) {
          return true;
        }
        return false;
      });
      
      cars.forEach(car => {
        car.style.display = 'none';
      });
      
      filteredCars.forEach(car => {
        car.style.display = 'inline-block';
      });
    }
  </script>
</body>
</html>
