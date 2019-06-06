<?php
// www.maboutique.com/index.php 
// www.maboutique.com/boutique.php



// www.maboutique.php/index.php?controlller=produits&action=affichage&id=165
// $a = new produitsCopntroller;
// $->affichage(165);

// www.maboutique.php/index.php?controlller=produits&action=inscription
// $a = new userController;
// $a->inscription();

// //réécriture d'URL: 
// www.maboutique.com/produits/affichage/165 
// $a = new produitsController;
// $a->affichage(165);

// //routing:

// www.maboutique.com/product/show/165 
// $a new produitsController; 
// $a->affichage(165);

require('produits_controller.php');
//localhost/Symfony/PHPOO/MVC/index.php
$a = new produitsController;
$a->boutique();