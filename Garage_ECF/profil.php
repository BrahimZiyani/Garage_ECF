<!DOCTYPE html> 
<html> 
	<head> 
		<title> Fetch Data From Database </title>
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

    .user-table {
      margin: 0 auto;
      border-collapse: collapse;
      border: 1px solid orange;
    }

    .user-table th,
    .user-table td {
      padding: 12px;
      border-bottom: 1px solid orange;
    }

    .user-table th {
      background-color: orange;
      font-weight: bold;
      text-align: center;
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

  if (isset($_SESSION['id'])) {

?>

<table class="user-table">
  <thead>
    <tr>
      <th colspan="2">Profil utilisateur</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Nom</td>
      <td><?=$_SESSION['nom'];?></td>
    </tr>
    <tr>
      <td>Prénom</td>
      <td><?=$_SESSION['prenom'];?></td>
    </tr>
    <tr>
      <td>Adresse email</td>
      <td><?=$_SESSION['username'];?></td>
    </tr>
    </tbody>
    </table>   

<?php

} else {
    echo "L'ID de l'utilisateur n'est pas spécifié.";
}

?>    

<footer class="footer">
  <p>Tous droits réservés &copy; 2023 Garage Vincent Parrot</p>
</footer>

</body> 
</html>

