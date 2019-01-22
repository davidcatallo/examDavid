<?php require_once('helper.php'); 


/* Je vérifie si mes variables se transmettent bien avec var_dump($_POST); */
var_dump($_POST);


/**
 * j'effectue mes validations :
 * - titre, adresse, ville, cp, surface, prix, photo, type, description
 */


/* Titre obligatoire*/
if (empty($_POST['titre'])) {
    echo ("Le titre ne doit pas être vide.");
}

else {
    $titre = $_POST['titre'];
}


/* adresse obligatoire */
if (empty($_POST['adresse'])) {
    echo ("L'adresse ne doit pas être vide.");
}
else {
    $adresse = $_POST['adresse'];
}



/* ville obligatoire */
if (empty($_POST['ville'])) {
    echo ("La ville ne doit pas être vide.");
}
else {
    $ville = $_POST['ville'];
}



/* cp obligatoire */
if (empty($_POST['cp'])) {
    echo ("Le cp ne doit pas être vide.");
}
else {
    $cp = $_POST['cp'];
}



/* Le champs prix doit contenir exclusivement un nombre entier et ne doit pas etre vide */
if (empty($_POST['prix'])) {
    echo ("Le prix ne doit pas être vide.");
}
elseif (!is_numeric($_POST['prix'])) {
    echo ('Le prix doit être un nombre');
}
elseif (is_float($_POST['prix'])) {
    echo ('Le prix doit être un nombre entier');
}
else {
    $prix = $_POST['prix'];
}



/* Le champs surface doit contenir exclusivement un nombre entier et ne dois pas être vide*/
if (empty($_POST['surface'])) {
    echo ("La surface ne doit pas être vide.");
}
elseif (!is_numeric($_POST['surface'])) {
    echo ('La surface doit être un nombre');
}
elseif (is_float($_POST['surface'])) {
    echo ('La surface doit être un nombre entier');
}
else {
    $surface = $_POST['surface'];
}



/* 
Validation du champ photo, il doit permettre un upload de fichier image, 
les vérifications sont multiples : extension et type de fichier, poids du fichier, etc.
il peut être vide
*/

// Je liste les extensions autorisées
$extensionsAutorisees = ['jpg', 'jpeg', 'gif', 'png'];
// Teste de l'envoi de la photo
if (empty($_FILES['photo']['name'])) {
    $photo = null;
}
elseif($_FILES['photo']['error'] !== 0) {
    echo "Attention, erreur lors de l'upload de l'image.";
}
// Teste de la taille de la photo
elseif ($_FILES['photo']['size'] >= 1000000) {
    echo "Attention, l'image est trop grosse.";
}
// Teste si l'extension est autorisée et accès 
// 
elseif (!in_array( pathinfo($_FILES['photo']['name'])['extension'], $extensionsAutorisees) ) {
    echo "Attention, le fichier n'est pas autorisé.";
}
else {
    $nomAleatoire = "loge_" . uniqid();
    $photo = $nomAleatoire . "." . pathinfo($_FILES['photo']['name'])['extension'];
    move_uploaded_file($_FILES['photo']['tmp_name'], 'photos/'. $photo );
}



/* type obligatoire */
if (empty($_POST['type'])) {
    echo "Le type est obligatoire.";
}
else {
    $type = $_POST['type'];
}



/* La description peut etre null */
if (empty($_POST['description'])) {
    $description = null;
}
else {
    $description = $_POST['description'];
}

/**
 * derniere validation pour être sur!
 * 
 * Enregistrement bdd
 */
// Erreur si un des champ obligatoire est vide.
if (empty($titre) || empty($adresse) || empty($ville) || empty($cp) || empty($surface) || empty($prix) || empty($type) ) {
    echo 'Les champs titre, adresse, ville, cp, surface, prix et type sont obligatoire';
}
else {

    $bdd = dbConnect();

    $query = "  INSERT INTO logement_david(titre, adresse, ville, cp, surface, prix, photo, type, description)
                    VALUES (:titre, :adresse, :ville, :cp, :surface, :prix, :photo, :type, :description)";
    $response = $bdd->prepare($query);
    $response->execute([
            'titre'         => $titre,
            'adresse'       => $adresse,
            'ville'         => $ville,
            'cp'            => $cp,
            'surface'       => $surface,
            'prix'          => $prix,
            'photo'         => $photo,
            'type'          => $type,
            'description'   => $description
        ]);
        echo "<h3>Le film a bien été ajouté !</h3>";
        echo "<a href='list.php'>Aller à la liste</a>";

}