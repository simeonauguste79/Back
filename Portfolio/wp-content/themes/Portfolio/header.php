<!DOCTYPE html>
<html <?php language_attributes();?>>
<!-- fonction wordpress qui retourne la langue du site-->
<head>
    <meta charset="<?php bloginfo('charset'); // fonction wordpress qui retourne le bon encodage ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css"><!-- bloginfo('template_directory') fonction wordpress qui retourne l'URL du thème portfolio -->
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); // wp_head() charge des fichiers indispensables à wordpress (fichier js, css, etc...) et permet de récupérer la sidebar noire en haut de la page ?>
</head>
<body <?php body_class(); // appel à des classes de wordpress ?>>

<div class="container-fluid px-0">
    <div class="d-flex">
      <div class="col-md-1 bg-ight hauteur">
        <?php dynamic_sidebar('Haut-gauche') ?>
      </div>
      <div class="col-md-10 pt-5 bg-ight hauteur">
        <?php dynamic_sidebar('Haut-centre') ?>
      </div>
      <div class="col-md-1 bg-ight hauteur">
        <?php dynamic_sidebar('Haut-droit') ?>
      </div>
    </div>


    <!--DEBUT DE LA NAVBAR--->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <?php wp_nav_menu( array('container_class' => 'menu-header',
          'theme_location' => 'primary') ); ?>

        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <!-- FIN DE LA NAVBAR -->

    <div class="col-md-12 px-0 bg-danger h-entetes">
        <?php dynamic_sidebar('Entete') ?>
    </div>
</div>

<section class="ma-section">