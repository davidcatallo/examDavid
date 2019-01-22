<?php require_once('helper.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>logement</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">

                <p class="lead">
                    <h1>choix du logement</h1>
                    <a href="list.php" class="btn btn-sm btn-danger">< retour</a>
                    <br>       
                </p>

                <form action="save.php" method="post">

                    <label for="titreLogement">nom du logement</label>
                    <input id="titreLogement" class="form-control" type="text" name="titre" required>

                    <label for="adresseLogement">adresse</label>
                    <input id="adresseLogement" class="form-control" type="text" name="adresse" required>

                    <label for="villeLogement">ville</label>
                    <input id="villeLogement" class="form-control" type="text" name="ville" required>

                    <label for="cpLogement">code postal</label>
                    <input id="cpLogement" class="form-control" type="number" name="cp" required>

                    <label for="surfaceLogement">surface</label>
                    <input id="surfaceLogement"  class="form-control" type="text" name="surface" required>

                    <label for="prixLogement">prix du logement</label>
                    <input id="prixLogement"  class="form-control" type="text" name="prix" required>

                    <label for="photoLogement">Photo</label>
                    <input type="file" class="form-control" id="photoLogement" name="photo" >

                    <label for="typeLogemement">Location ou vente</label>
                    <select id="typeLogemement" class="form-control" name="type" required>
                        <option value="location">Location</option>          
                        <option value="vente">Vente</option>
                    </select>

                    <label for="descriptionLogement">description</label>
                    <input id="descriptionLogement"  class="form-control" type="text" name="description" >

                    <hr>
                    
                    <button class="btn btn-primary float-right" type="submit">Enregistrer</button>
                </form>

            </div>
        </div>
    </div>
</body>
</html>
