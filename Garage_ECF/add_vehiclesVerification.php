<?php
session_start();
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Établir une connexion à la base de données (vous devez remplacer les valeurs par vos informations de connexion)
    $db_username = 'root';
    $db_password = '';
    $db_name = 'vincent_parrot_garage';
    $db_host = 'localhost';
    
    try {
        $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
        // Définir le mode d'erreur PDO sur Exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Récupérer les données du formulaire
        $pics = $_FILES['pics']['name']; // Le nom du fichier téléchargé
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $color = $_POST['color'];
        $mileage = $_POST['mileage'];
        $energy = $_POST['energy'];
        $year = $_POST['year'];
        $price = $_POST['price'];


        // Vérifier si le fichier est une image PNG de moins de 3 mégabytes
    if ($_FILES['pics']['error'] === UPLOAD_ERR_OK) {
            $allowedFormats = array('png');
            $fileFormat = pathinfo($_FILES['pics']['name'], PATHINFO_EXTENSION);
            $fileSize = $_FILES['pics']['size'];

            if (!in_array(strtolower($fileFormat), $allowedFormats)) {
                // Le format du fichier n'est pas autorisé
                header("Location: add_vehicles.php?erreur=3");
                exit();
            }

            if ($fileSize > 3 * 1024 * 1024) {
                // Le fichier est trop gros (supérieur à 3 mégabytes)
                header("Location: add_vehicles.php?erreur=4");
                exit();
            }

            // Déplacer le fichier vers le dossier img
            move_uploaded_file($_FILES['pics']['tmp_name'], './img/' . $pics);

    } else {
            // Gérer l'erreur de téléchargement du fichier
            // Vous pouvez afficher un message d'erreur approprié ici
            header("Location: add_vehicles.php?erreur=1");
            exit();
    }

// ...


        // Insérer les données dans la table "Vehicles"
        $sql = "INSERT INTO Vehicles (pics, brand, model, color, mileage, energy, year, price) 
                VALUES (:image, :marque, :modele, :couleur, :kilometrage, :energie, :annee_mise_en_service, :prix)";
        $stmt = $conn->prepare($sql);
        $stmt->execute(array(
            'image' => $pics,
            'marque' => $brand,
            'modele' => $model,
            'couleur' => $color,
            'kilometrage' => $mileage,
            'energie' => $energy,
            'annee_mise_en_service' => $year,
            'prix' => $price
        ));

        // Rediriger vers la page d'ajout de véhicule avec un message de succès
        header("Location: add_vehicles.php?success=1");
        exit();
    } catch (PDOException $e) {
        // Gérer les erreurs PDO
        // Vous pouvez afficher un message d'erreur approprié ici
        header("Location: add_vehicles.php?erreur=2");
        exit();
    } finally {
        // Fermer la connexion à la base de données
        $conn = null;
    }
} else {
    // Rediriger si le formulaire n'a pas été soumis directement
    header("Location: add_vehicles.php");
    exit();
}
?>
