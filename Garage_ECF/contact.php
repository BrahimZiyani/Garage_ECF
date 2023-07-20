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
    
    h1{
        text-align: center;
    }

    .contacter{
        text-align: center;
    }

    #contact-form {
      max-width: 400px;
      margin: 30px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    #contact-form label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      color: #555;
    }

    #contact-form input,
    #contact-form textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }

    #contact-form textarea {
      height: 120px;
    }

    #contact-form button {
      display: block;
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      background-color: orange;
      color: black;
      border: none;
      border-radius: 20px;
      cursor: pointer;
    }

    #contact-form button:hover {
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
      <a href="">Contact</a>
      <a href="reperations.php">Réparations</a>
    </div>

    <div class="navbar-login">
    <?php include 'header.php'; ?>
    </div>
  </nav>


   <h1>Nous contacter :</h1>

   <div class="contacter">
    <h3>Appelez nous au : </h3>
   <p>06 58 79 69 73</p>
   <h3>Ou par mail:</h3>
   <p>vincent.parrot@gmail.fr <br> <br> Ou envoyez-nous un message ici :</p>
   </div>
  
   <form id="contact-form">
    <div>
      <label for="first-name">Prénom :</label>
      <input type="text" id="first-name" required>
    </div>
    <div>
      <label for="last-name">Nom :</label>
      <input type="text" id="last-name" required>
    </div>
    <div>
      <label for="phone">Numéro de téléphone :</label>
      <input type="tel" id="phone" required>
    </div>
    <div>
      <label for="email">E-mail :</label>
      <input type="email" id="email" required>
    </div>
    <div>
      <label for="message">Message :</label>
      <textarea id="message" required></textarea>
    </div>
    <button type="submit">Envoyer</button>
  </form>

  <footer class="footer">
    <p>Tous droits réservés &copy; 2023 Garage Vincent Parrot</p>
  </footer>

  <script>
    document.getElementById("contact-form").addEventListener("submit", function(event) {
      event.preventDefault(); // Empêche la soumission du formulaire

      // Récupérer les valeurs des champs
      var firstName = document.getElementById("first-name").value;
      var lastName = document.getElementById("last-name").value;
      var phone = document.getElementById("phone").value;
      var email = document.getElementById("email").value;
      var message = document.getElementById("message").value;

      // Afficher les valeurs dans la console (vous pouvez les envoyer à un serveur ici)
      console.log("Prénom :", firstName);
      console.log("Nom :", lastName);
      console.log("Numéro de téléphone :", phone);
      console.log("E-mail :", email);
      console.log("Message :", message);

      // Réinitialiser le formulaire
      document.getElementById("contact-form").reset();
    });
  </script>
</body>
</html>
