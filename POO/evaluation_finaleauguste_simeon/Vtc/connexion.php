<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php
// Exo : réaliser le traitement PHP afin de se connecter à la BDD 'entreprise'
$pdo = new PDO('mysql:host=localhost;dbname=vtc', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

echo '<pre>'; print_r($pdo);echo '</pre>';
echo '<pre>'; print_r(get_class_methods($pdo));echo '</pre>';

echo "<h2 class='display-4 text-center'>exemple n° 1 SELECT + QUERY + FETCH</h2><hr>";

//Exo : afficher avec la méthode FETCHALL()

$resultat = $pdo->query("SELECT * FROM conducteur");

$conducteur = $resultat->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>'; print_r($conducteur);echo '</pre>';
foreach($conducteur as $key => $tab)
{
    echo '<div class="alert alert-info col-md-4 offset-md-4 text-center text-dark">';
    foreach($tab as $key2 => $value)
    {
         echo "$key2 - $value<hr>";
    }
    echo '</div>';
}

echo "<h2 class='display-4 text-center'>exemple n° 3 SELECT + QUERY + FETCH_ASSOC</h2><hr>";
$resultat = $pdo->query("SELECT * FROM employes", PDO::FETCH_ASSOC); // on demande d'indexer avec le nom des champs quand c'est toujours au stade d'objet
echo '<pre>'; var_dump($resultat);echo '</pre><br/>';

//------------------------------------VEHICULE----------------------------

$resultat = $pdo->query("SELECT * FROM vehicule");
$vehicule = $resultat->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>'; print_r($vehicule);echo '</pre>';
foreach($vehicule as $key => $tab)
{
    echo '<div class="alert alert-info col-md-4 offset-md-4 text-center text-dark">';
    foreach($tab as $key2 => $value)
    {
         echo "$key2 - $value<hr>";
    }
    echo '</div>';
}

echo "<h2 class='display-4 text-center'>exemple n° 3 SELECT + QUERY + FETCH_ASSOC</h2><hr>";
$resultat = $pdo->query("SELECT * FROM employes", PDO::FETCH_ASSOC); // on demande d'indexer avec le nom des champs quand c'est toujours au stade d'objet
echo '<pre>'; var_dump($resultat);echo '</pre>';



//------------------------------------ASSOCIATION----------------------------

$resultat = $pdo->query("SELECT * FROM association");
$association = $resultat->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>'; print_r($association);echo '</pre>';
foreach($association as $key => $tab)
{
    echo '<div class="alert alert-info col-md-4 offset-md-4 text-center text-dark">';
    foreach($tab as $key2 => $value)
    {
         echo "$key2 - $value<hr>";
    }
    echo '</div>';
}

echo "<h2 class='display-4 text-center'>exemple n° 3 SELECT + QUERY + FETCH_ASSOC</h2><hr>";
$resultat = $pdo->query("SELECT * FROM employes", PDO::FETCH_ASSOC); // on demande d'indexer avec le nom des champs quand c'est toujours au stade d'objet
echo '<pre>'; var_dump($resultat);echo '</pre>';







