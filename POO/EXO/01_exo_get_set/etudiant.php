<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Etudiant</title>
</head>
<body>
    <?php
   include_once('etudiant.class.php');
    //--------------------------------------INSTANCIATION----------------------------
    $etudiant = new Etudiant;
    $etudiant->setPrenom('Auguste');
    $etudiant->setNom('Auguste');
    $etudiant->setEmail('ba.simeon@gmail.com');
    $etudiant->setTelephone('0610266544');
    //-------------------------
    $etudiant->getPrenom();
    $etudiant->getNom();
    $etudiant->getEmail();
    $etudiant->getTelephone();
    
    $e = $etudiant->getInfos();
    
    // $etudiant2 = new Etudiant;
    // $etudiant2->setPrenom('Marcus');
    // $etudiant2->setNom('Hamback'); 
    // $etudiant2->setEmail('marcus@gmail.com'); 
    // $etudiant2->setTelphone(0610266544);
    // echo '<pre>', var_dump(getInfos($etudiant2)); '</pre>';
?>
    <h1>Etudiant: 
             <?= $e['prenom'] . ' ' . $e['nom'] ?>
    </h2>
    Prenom : <?= $e['prenom'] ?><br>
    Nom : <?= $e['nom']  ?><br>
    Telephone : <?= $e['telephone'] ?><br>
    Email : <?= $e['email'] ?><br>
    
</body>
</html>