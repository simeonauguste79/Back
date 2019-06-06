<?php
require('produits_model.php');
class  produitsController
{
    private $model; //contient l'objt produit modem
    public function __construct()
    {
        $this->model = new produitsModel;
        //afficher tous les produitspublic 
        
    }
    
    //afficher tous les produits
    public function boutique()
    {
        //Fonction principale: fonction afficher tous les produits 
        //1: récuperer les produits
        $produits = $this->model->findAll();
        $categories = $this -> model -> findCat();


        // echo '<pre>';
        // print_r($produits);
        // echo '<pre>';
        //2: Récuperer tous les produits
        require('produits.php');
    }
    //afficher un seul produit
    public function affichage($id)
    {

    }
   //afficher tous les produits d'une cat
    public function categorie($categorie)
    {

    }
    //ajouter un produit
    public function ajouterProduit($id, $data)
    {
        
    }
    //supprimerun produit
    public function supprimerProduit($id)
    {

    }
    




}