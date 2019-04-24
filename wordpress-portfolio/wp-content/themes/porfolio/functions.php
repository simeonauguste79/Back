<?php
add_action('widgets_init', 'portfolio_init_sidebar'); // On crée un 'hook' c'est à dire qu'on accroche une fonction de WordPress pour pouvoir s'en servir
//Widgets_init -> fonction wordpress
//Portfolio_init_sidebar -> fonction utilisateur que l'on va declarer ci-dessous

add_action('init', 'portfolio_init_menu'); //Permet de recuperer les fonctionnalités du menu wordPress dans le backoffice



function portfolio_init_sidebar()
{//Creation region Haut-gauche
    register_sidebar(array(
       'name'  => __('Haut gauche', 'Portfolio'),
       'id' => 'haut-gauche',
       'description' => __('region en haut à gauche', 'Portfolio')
    ));
//Register_sidbar permet de créer les regions widget
//Creation region Haut-centre
    register_sidebar(array(
       'name'  => __('Haut centre', 'Portfolio'),
       'id' => 'haut-centre',
       'description' => __('region en haut au gauche', 'Portfolio')
    ));
//Creation region Haut-droit
    register_sidebar(array(
       'name'  => __('Haut droit', 'Portfolio'),
       'id' => 'haut-droit',
       'description' => __('region en haut à droite', 'Portfolio')
    ));
//Creation region Entetes
    register_sidebar(array(
       'name'  => __('Entetes', 'Portfolio'),
       'id' => 'Entetes',
       'description' => __('region Entetes', 'Portfolio')
    ));
//Creation region Bas-gauche
    register_sidebar(array(
       'name'  => __('bas-gauche', 'Portfolio'),
       'id' => 'bas-gauche',
       'description' => __('region bas-gauche', 'Portfolio')
    ));
//Creation region bas-centre
    register_sidebar(array(
       'name'  => __('bas-centre', 'Portfolio'),
       'id' => 'bas-centre',
       'description' => __('region bas-centre', 'Portfolio')
    ));
//Creation region bas-droit
    register_sidebar(array(
       'name'  => __('bas-droit', 'Portfolio'),
       'id' => 'bas-droit',
       'description' => __('region bas-droit', 'Portfolio')
    ));

}
//Exo: Créer les differentes regions: haut-centre, haut-droit, entetes, bas-gauche, bas-centre, bas-droit



/*
Je descends immediatement après avoir créer mon menu en haut 
add_action('init', 'portfolio_init_menu'); //Permet de recuperer les fonctionnalités du menu wordPress dans le backoffice
*/
 
function portfolio_init_menu()
{
    register_nav_menu('primary', __('Primary Menu', 'Portfolio'));
}
//
?>