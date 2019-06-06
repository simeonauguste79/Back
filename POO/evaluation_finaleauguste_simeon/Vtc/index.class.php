<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php


include_once('conducteur.class.php');
include_once('.class.php');
// include_once('vehicule.class.php');
// include_once('assocaition.class.php');

//-------------------------------INSTANCIATION avec set et get-------------------------------

$conducteur = new Conducteur;
$prenom->setPrenom('Avigny');
$prenom->setNom('Avigny');
//-------------------------------get--------------------------
$prenom->getPrenom();
$prenom->getNom();

$e = $conducteur->getInfos();








?>
    
</body>
</html>



