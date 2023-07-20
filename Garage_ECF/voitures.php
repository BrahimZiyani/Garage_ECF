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
        padding-top: 50px;
        text-align: center;
        color: orange;
    }
    
    .wrapper {
        text-align: center;   
        width: 95%;
        margin: 0 auto;
    }   

    #search-container {
      margin: 1em 0;
    }

    #search-container input {
      text-align: center;
      background-color: orange;
      width: 30%;
      border-radius: 10px;
      border: 2px solid orange;
      padding: 1em 0.3em;
    }

    #search-container input:focus {
      border-bottom-color: orange;
    }

    #search-container button {
      padding: 1em 2em;
      margin-left: 1em;
      background-color: orange;
      color: black;
      border: 2px solid orange;
      border-radius: 15px;
      margin-top: 0.5em;
      cursor: pointer; 
    }

    .button-value {
      border: 2px solid orange;
      padding: 1em 2.2em;
      border-radius: 3em;
      background-color: orange;

      cursor: pointer;
    }

    .active {
      background-color: orange;
      color: #ffffff;
    }

    .prixmin{
      margin: 25px;
    }

    .prixmax{
      margin: 25px;
    }

    #products {
      display: grid;
      justify-content: center;
      grid-template-columns: auto auto auto;
      grid-column-gap: 1.5em;
      padding: 2em 0;
    }

    .card {
      max-width: 18em;
      margin-top: 1em;
      padding: 1em;
      border-radius: 5px;
      box-shadow: 1em 2em 2.5em rgba(1, 2, 68, 0.08);
    }

    .image-container {
      text-align: center;
    }

    img {
      max-width: 100%;
      object-fit: contain;
      height: 15em;
      cursor: pointer;
    }

    .container {
      padding-top: 1em;
      color: #110f29;
    }

    .container h5 {
      font-weight: 500;
    }

    .hide {
      display: none;
    }

    @media screen and (max-width: 720px) {
      img {
        max-width: 100%;
        object-fit: contain;
        height: 10em;
      }
  
      .card {
        max-width: 10em;
        margin-top: 1em;
      }
  
      #products {
        grid-template-columns: auto auto;
        grid-column-gap: 1em;
      }
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
   

   <h1>Nos voitures</h1>

    <div class="wrapper">
      <div id="search-container">
        <input type="search" id="search-input" placeholder="Rechercher une voiture"/>
        <button id="search">Rechercher</button>
      </div>
    <div id="buttons">
      <button class="button-value" onclick="showAllProducts()">Tout</button>
      <button class="button-value" onclick="filterProductByEnergy('Essence')">Essence</button>
      <button class="button-value" onclick="filterProductByEnergy('Electrique')">Electrique</button>
    <div class="prixmin">
        <label for="min-price">Prix minimum :</label>
        <input type="number" id="min-price" min="0" placeholder="Min">
    </div>
    <div class="prixmax">
        <label for="max-price">Prix maximum :</label>
        <input type="number" id="max-price" min="0" placeholder="Max">
    </div>
      <button class="button-value" onclick="filterByPrice()">Filtrer par prix</button>
    </div>
    </div>

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

  <div id="products">
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
    <div class="card <?php echo strtolower($energy); ?>">

      <div class="image-container">
        <img src="<?php echo $pics; ?>" alt="Image du véhicule">
      </div>
      <div class="container">
        <h5><?php echo $brand; ?> <?php echo $model; ?></h5>
        <p>Couleur : <?php echo $couleur; ?></p>
        <p>Kilométrage : <?php echo $mileage; ?></p>
        <p>Énergie : <?php echo $energy; ?></p>
        <p>Année : <?php echo $year; ?></p>
        <h6><?php echo $price; ?> €</h6>
        <a href="<?= $url; ?>"> Plus de détails</a>
      </div>
    </div>
    <?php
      }
    ?>
  </div>

  <footer class="footer">
    <p>Tous droits réservés &copy; 2023 Garage Vincent Parrot</p>
  </footer>

  <!-- SCRIPT JS -->
  <script>

function showAllProducts() {
  let products = document.querySelectorAll("#products .card");
  products.forEach((product) => {
    product.classList.remove("hide");
  });
}



function filterProductByEnergy(energy) {
  let buttons = document.querySelectorAll(".button-value");
  buttons.forEach((button) => {
    if (button.innerText.toUpperCase() === energy.toUpperCase()) {
      button.classList.add("active");
    } else {
      button.classList.remove("active");
    }
  });

  let elements = document.querySelectorAll(".card");
  elements.forEach((element) => {
    if (energy === "all") {
      element.classList.remove("hide");
    } else {
      if (element.classList.contains(energy.toLowerCase())) {
        element.classList.remove("hide");
      } else {
        element.classList.add("hide");
      }
    }
  });
}


function filterByPrice() {
  let minPrice = parseFloat(document.getElementById("min-price").value.replace(/\s+/g, ''));
  let maxPrice = parseFloat(document.getElementById("max-price").value.replace(/\s+/g, ''));

  let elements = document.querySelectorAll(".card");
  elements.forEach((element) => {
    let price = parseFloat(element.querySelector(".container h6").innerText.replace(/\s+/g, '').replace('€', ''));
    if ((isNaN(minPrice) || price >= minPrice) && (isNaN(maxPrice) || price <= maxPrice)) {
      element.classList.remove("hide");
    } else {
      element.classList.add("hide");
    }
  });
}


document.getElementById("search").addEventListener("click", function() {
  // Récupérer la valeur de recherche
  let searchValue = document.getElementById("search-input").value.toLowerCase();

  // Sélectionner toutes les cartes
  let cards = document.querySelectorAll("#products .card");

  // Parcourir toutes les cartes
  cards.forEach((card) => {
    // Récupérer le nom du produit dans la carte
    let productName = card.querySelector(".container h5").textContent.toLowerCase();

    // Vérifier si le nom du produit contient la valeur de recherche
    if (productName.includes(searchValue)) {
      card.classList.remove("hide"); // Afficher la carte
    } else {
      card.classList.add("hide"); // Masquer la carte
    }
  });
});


//Initially display all products
window.onload = () => {
  filterProduct("all");
};

 </script>
</body>
</html>
