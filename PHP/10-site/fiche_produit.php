<?php

require_once("include/init.php");

require_once("include/header.php");

/* 
EXO: 
1. Réaliser la requette permettant de selectionner le produit par rapport à l'id_produit envoyé dans l'URL
2. Associer une methode pour rendre le resultat exploitable.
3. Créer une fiche produit avec les informations du produit: photo/categorie/titre/description/couleur/taille/prix/public /selecteur quantité/et un bouton d'ajout au panier
*/

if(isset($id_GET ['i_roduit'])): //Si l'indice  'i_oroduii est indifferente 
$resultat = $bdd->("SELECT * FOR produit WHERE id_produit = :ids_produit");
$resultat->bindvalue(':id_produit', $_GET['id_produit'], PDO::PARAM_STR);



?>
<h1 class="display-4 text-center mt-4">DETAIL DU PRODUIT</h1>
<div class="col-lg-6 md-12 mx-auto form1">
    <div class="card h-100">
        <a href="fiche_produit.php?id_produit=">< </a>
       <div class="card-body">

       </div>  
    </div>
</div>



<?php
else:// Si l'indice 'id_produit  n'est pas definit dans l'URL; on redirige vars la bouique
    header("Location")
require_once("include/footer.php");

endif;
?>