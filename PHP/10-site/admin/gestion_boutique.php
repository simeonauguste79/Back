<?php 
require_once('../include/init.php');
extract($_POST);

// Si l'internaute n'est pas connecté et n'est pas ADMIN, il n'a rien à faire ici, on le redirige vers la page connexion.php
if(!internauteEstConnecteEtEstAdmin())
{
    header("Location:" . URL . "connexion.php");
}

//----------- ENREGISTREMENT PRODUIT
if($_POST)
{
    $photo_bdd = '';
    if(!empty($_FILES['photo']['name']))
    {
        $nom_photo = $reference . '-' . $_FILES['photo']['name'];
        echo $nom_photo . '<br>';

        $photo_bdd = URL . "photo/$nom_photo";
        echo $photo_bdd . '<br>';

        $photo_dossier = RACINE_SITE . "photo/$nom_photo";
        echo $photo_dossier . '<br>';

        copy($_FILES['photo']['tmp_name'], $photo_dossier);
    }
}


require_once('../include/header.php');
echo '<pre>'; print_r($_POST);echo '</pre>';
// $_FILES : superglobale permet de véhiculer les informations d'un fichier uploader
echo '<pre>'; print_r($_FILES);echo '</pre>';
?>

<h1 class="display-4 text-center">AJOUT D'UN PRODUIT</h1><hr>
<!-- 
1. Réaliser un formulaire permettant d'insérer un produit dans la table  'produit' (sauf le champs : id_produit)
-->
<form method="post" action="" class="col-md-6 offset-md-3 form1" enctype="multipart/form-data"><!-- enctype : obligatoire en PHP pour recolter les informations d'1 fichier uploadé -->
<div class="form-group">
    <label for="reference">Référence</label>
    <input type="text" class="form-control" id="reference" name="reference" placeholder="Enter reference">  
</div>
<div class="form-row">
    <div class="form-group col-md-6">
    <label for="categorie">Catégorie</label>
    <input type="text" class="form-control" id="categorie" name="categorie" placeholder="Enter categorie">
    </div>
    <div class="form-group col-md-6">
    <label for="titre">Titre</label>
    <input type="text" class="form-control" id="titre" name="titre" placeholder="Enter titre">
    </div>
</div>
<div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" name="description" placeholder="Enter description">
</div>
<div class="form-row">
    <div class="form-group col-md-6">
    <label for="couleur">Couleur</label>
    <input type="text" class="form-control" id="couleur" name="couleur" placeholder="Enter couleur">
    </div>
    <div class="form-group col-md-6">
    <label for="taille">Taille</label>
    <select id="taille" class="form-control" name="taille">
        <option selected>Choose...</option>
        <option value="s">S</option>
        <option value="m">M</option>
        <option value="l">L</option>
        <option value="xl">XL</option>
    </select>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
    <label for="public">Public</label>
    <select id="public" class="form-control" name="public">
        <option selected>Choose...</option>
        <option value="m">Homme</option>
        <option value="f">Femme</option>
        <option value="mixte">Mixte</option>
    </select>
    </div>
    <div class="form-group col-md-6">
    <label for="photo">Photo</label>
    <input type="file" class="form-control" id="photo" name="photo">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
    <label for="prix">Prix</label>
    <input type="text" class="form-control" id="prix" name="prix" placeholder="Enter prix">
    </div>
    <div class="form-group col-md-6">
    <label for="stock">Stock</label>
    <input type="text" class="form-control" id="stock" name="stock" placeholder="Enter stock">
    </div>
</div>
<button type="submit" class="btn btn-dark">Ajout</button>
</form>

<?php 
require_once('../include/footer.php');