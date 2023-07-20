<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Récupération de mot de passe</title>
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

    .container {
      max-width: 400px;
      margin: 50px auto;
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .container h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .container label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      color: #555;
    }

    .container input[type="email"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-bottom: 10px;
    }

    .container button {
      display: block;
      width: 100%;
      padding: 10px;
      margin-top: 20px;
      background-color: orange;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .container button:hover {
      background-color: #555;
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
      <a href="index.html">
        <img src="img\Logo.png" alt="Logo">
      </a>
    </div>

    <div class="navbar-links">
      <a href="indexVoitures.html">Voitures</a>
      <a href="indexContact.html">Contact</a>
      <a href="indexReparations.html">Réparations</a>
    </div>

    <div class="navbar-login">
    <?php include 'header.php'; ?>
    </div>
  </nav>
 

  <div class="container">
    <h2>Récupération de mot de passe</h2>
    <form>
      <label for="email">E-mail :</label>
      <input type="email" id="email" required>

      <button type="submit">Envoyer</button>
    </form>
  </div>

  <footer class="footer">
    <p>Tous droits réservés &copy; 2023 Garage Vincent Parrot</p>
  </footer>
</body>
</html>
