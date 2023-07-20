<html>
 <head>
 <meta charset="utf-8">

 <style>
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

    #container{
      width:400px;
      margin:0 auto;
      margin-top:10%;
    }

    /* Bordered form */

    form {
      width:100%;
      padding: 30px;
      border: 1px solid #f1f1f1;
      background: #fff;
      box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }
    
    #container h1{
      width: 38%;
      margin: 0 auto;
      padding-bottom: 10px;
    }

    /* Full-width inputs */
    input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    /* Set a style for all buttons */
    input[type=submit] {
      background-color: orange;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    input[type=submit]:hover {
      background-color: white;
      color: #53af57;
      border: 1px solid #53af57;
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

 <div id="container">
 <!-- zone de connexion -->
 
    <form action="add_vehiclesVerification.php" method="POST" enctype="multipart/form-data">
    <h1>Ajout de véhicule</h1>

    <label for="file"><b>Image</b></label>
        <input type="file" name="pics" required>

    <label><b>Marque</b></label>
        <input type="text" placeholder="Entrer la marque du véhicule'" name="brand" required>

    <label><b>Modèle</b></label>
        <input type="text" placeholder="Entrer le modèle'" name="model" required>

    <label><b>Couleur</b></label>
        <input type="text" placeholder="Entrer la couleur'" name="color" required>

    <label><b>Kilométrage</b></label>
        <input type="text" placeholder="Entrer le kilométrage'" name="mileage" required>

    <label><b>Energie</b></label>
        <input type="text" placeholder="Entrer l'energie utilisé'" name="energy" required>

    <label><b>Année de mise en service</b></label>
        <input type="text" placeholder="Entrer l'année de mise en service'" name="year" required>

    <label><b>Prix</b></label>
        <input type="text" placeholder="Entrer le prix du véhicule" name="price" required>

    <input type="submit" id='submit' value='AJOUTER' >
 
 <?php
 
 if(isset($_GET['erreur'])){
    $err = $_GET['erreur'];
 if($err==1 || $err==2)
    echo "<p style='color:red'>Echec de l'ajout de véhicule</p>";
 }
 ?>
 
 </form>
 </div>

 <footer class="footer">
    <p>Tous droits réservés &copy; 2023 Garage Vincent Parrot</p>
 </footer>

 </body>
</html>