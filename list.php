<?php require_once('helper.php'); 


$bdd = dbConnect();
$request = "SELECT * FROM logement_david";
$response = $bdd->query($request);

$logements = [];

while ( $logement = $response->fetch() ) {
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
                            <td><?= $l['titre']; ?></td>
                            <td><?= $l['adresse']; ?></td>
                            <td><?= $l['ville']; ?></td>
                            <td><?= $l['cp']; ?></td>
                            <td><?= $l['surface']; ?></td>
                            <td><?= $l['prix']; ?></td>
                            <td><?= $l['photo']; ?></td>
                            <td><?= $l['type']; ?></td>
                            <!-- si la description est supérieur a 20 caractères alors on affiche les 20 premiers caracteres puis ..., sinon on affiche tel quel -->
                            <td><?= strlen($l['description']) > 20 ? substr($l['description'],0,50)."..." : $l['description']; ?></td>
                            <td>
                                <a href="show.php?id=<?= $l['id_logement']; ?>" class="btn btn-sm btn-success">Plus d'infos</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</body>
</html>