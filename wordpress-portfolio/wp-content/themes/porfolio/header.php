<!DOCTYPE html>
<html <?php language_attributes(); //C'est une fonction wordpress qui retourne la langue du site?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <!-- CDN BOOSTRAP -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   <!-- FONTAWESOME -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

   <!-- FICHIER STYLE -->
   <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?> /style.css"> 
   <!-- Fonction WordPress qui retourne l'URL du teheme portfolio<?php bloginfo('template_directory'); ?> -->

    <title><?php bloginfo('name'); ?></title>


     <?php wp_head(); ?>
     <!-- wp_footer permet de charger des fichiers indispensables à wordress en CDN  BOOSTRAP en haut de page -->

</head>
<body <?php body_class(); ?>>
<!-- Appel à des class de wordpress dans le body -->

<div class="container-fluid px-0">
    <div class="d-flex">
        <div class="col-md-4 bg-success hauteur">
            <?php dynamic_sidebar('haut-gauche'); ?>
        </div>
             
        <div class="col-md-4 bg-warning hauteur">
            <?php dynamic_sidebar('haut-centre'); ?>
        </div>
              
        <div class="col-md-4 bg-info hauteur ">
            <?php dynamic_sidebar('haut-droit'); ?>
        </div>
        
    </div>
    <div class="col-md-12 px-0 bg-danger h-entetes ">
            <?php dynamic_sidebar('entetes'); ?>
    </div>
<!-- NAV-BAR -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
<!-- JE VIENS PLACER MON MENU -->

     
  <a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">


     <?php wp_nav_menu(array('container_class' =>'menu_header', 'theme_location' => 'primary')) ?>

      <!-- LIMITE DE LA FONCTION QUI APPELLE MON MENU PRIMAIRE
    Une fonction WordPress qui permet de prendre le menu principal créé dans function.php: container_class' =>'menu_header', 'theme_location' => 'primary'
    permet de preciser que c'est le menu principal -->
    </ul>
    <span class="navbar-text">
      Navbar text with an inline element
    </span>
  </div>
</nav>  

</div>


<section class="ma-section">





    
