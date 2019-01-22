<?php require_once('helper.php'); 



$bdd = dbConnect();

$query = "  INSERT INTO logement_david(titre, adresse, ville, cp, surface, prix, photo, type, description)
                VALUES (:titre, :adresse, :ville, :cp, :surface, :prix, :photo, :type, :description)";
$response = $bdd->prepare($query);
$response->execute([
        'titre'         => $_POST['titre'],
        'adresse'       => $_POST['adresse'],
        'ville'         => $_POST['ville'],
        'cp'            => $_POST['cp'],
        'surface'       => $_POST['surface'],
        'prix'          => $_POST['prix'],
        'photo'         => $_POST['photo'],
        'type'          => $_POST['type'],
        'description'   => $_POST['description']
    ]);
    echo "<h3>Le film a bien été ajouté !</h3>";
    echo "<a href='list.php'>Retour à la liste</a>";
