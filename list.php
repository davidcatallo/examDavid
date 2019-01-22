<?php require_once('helper.php'); 


$bdd = dbConnect();

// Ma requête à la BDD
$request = "SELECT * FROM logement_david";

// Je questionne (->query()) l'instance de base de données ($bdd) avec ma requête ($request)
$response = $bdd->query($request);

// Array qui contiendra les données requêtées
$logements = [];

// Tant que j'arrive à aller chercher (fetch) des lignes qui rentreront dans $logements :
while ( $logement = $response->fetch() ) {
    // Je met $logement dans mon tableau $logements
    $logements[] = $logement;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des logements</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <p>
                    <h1>Liste des logements</h1>
                    <a href="add.php" class="btn btn-sm btn-danger">Ajouter un logement</a>
                    <hr>
                </p>

                <table class="table">
                    <tr>
                        <th>Titre</th>
                        <th>adresse</th>
                        <th>ville</th>
                        <th>cp</th>
                        <th>surface</th>
                        <th>prix</th>
                        <th>photo</th>
                        <th>type</th>
                        <th>description</th>
                    </tr>

                    <?php foreach($logements as $l) { ?>
                        <tr>
                        <!-- si les champs textes sont supérieur a 20 caractères alors, 
                        on affiche seulement les 20 premiers caracteres puis '...', sinon on affiche tel quel -->
                            <td><?= strlen($l['titre']) > 20 ? substr($l['titre'],0,20)." ..." : $l['titre']; ?></td>
                            <td><?= strlen($l['adresse']) > 20 ? substr($l['adresse'],0,20)." ..." : $l['adresse']; ?></td>
                            <td><?= strlen($l['ville']) > 20 ? substr($l['ville'],0,20)." ..." : $l['ville']; ?></td>
                            <td><?= $l['cp']; ?></td>
                            <td><?= $l['surface']; ?></td>
                            <td><?= $l['prix']; ?></td>
                            <!-- je vais chercher ma photo dans mon dossier photos( pour l'instant, ne fonction pas car pas de photos importer) -->
                            <td><img src="photos/<?= $l['photo']; ?>" alt=""></td>
                            <td><?= strlen($l['type']) > 20 ? substr($l['type'],0,20)." ..." : $l['type']; ?></td>                            
                            <td><?= strlen($l['description']) > 20 ? substr($l['description'],0,20)." ..." : $l['description']; ?></td>
                        </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</body>
</html>