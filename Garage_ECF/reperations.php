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

    .h1{
        text-align: center;
    }

    .container{
        text-align: left;
        border: 2px solid orange;
        border-radius: 20px;
        width: 500px;
        margin: 25px auto;
        padding: 25px 25px;
    }

    .container p{
      font-size: 18px;
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
  <!-- HTML -->
</head>
<body>
  <nav class="navbar">
    <div class="navbar-logo">
      <a href="index.php">
        <img src="img\Logo.png" alt="Logo">
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


<div class="container">
        <h1>Nos réparations :</h1>
        <img src="img\garage.png" alt="" width="400px">
        <div class="carrosserie">
        <h3>Carrosserie rapide :</h3>
        <p>La carrosserie rapide concerne aussi bien les flottes que les particuliers. En effet, le concept repose sur la réparation de petits chocs. <br> Les travaux concernés peuvent être effectués aussi bien dans le cadre de l'assurance que hors assurance. L'essentiel est de mener à bien le travail sur une journée, <br> ce qui correspond à la fameuse notion de carrosserie rapide. Les gestionnaires de flottes comme le grand public peuvent ainsi bénéficier des avantages du service.</p>
        </div>
        <div class="mecannique">
        <h3>Mécannique :</h3>
        <p>Une panne, une casse, un accident ? <br> On s'occupe d'effectuer les diagnostics et les réparations mécaniques et de votre auto.</p>
        </div>
        <button class="contact">06 58 79 69 73</button>
        <button class="contact">vincent.parrot@gmail.fr</button>
</div>


<footer class="footer">
  <p>Tous droits réservés &copy; 2023 Garage Vincent Parrot</p>
</footer>


  <script>   
  </script>
</body>
</html>
