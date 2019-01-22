<?php 




$host       = 'localhost';  // Hôte de la base de données
$dbname     = 'immobilier_david';  // Nom de la bdd
$port       = '3308';       // Ou 3308 selon la configuration
$login      = 'root';       // Par défaut dans WAMP
$password   = '';           // Par défaut dans WAMP (pour MAMP : 'root')
try {
    $bdd = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8;port='.$port, $login, $password);
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


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
