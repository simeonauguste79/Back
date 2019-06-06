<?php
class produitsModel 
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=site', 'root', '', array(PDO::ATTR_ERRMODE => pdo::ERRMODE_WARNING,));
    }
    //--------------------------------------------------LA MISION
    //La mission est d'inter-agire avec la table produiys de BDD(REQUETE SQL)
    //recuperer tous les produits
    public function findAll()
    {
        $resultat = $this->pdo->query('SELECT * FROM produit');
        $produits = $resultat->fetchAll();
        return $produits;
    }

    public function findCat()
        {

            $resultat = $this->pdo->query('SELECT DISTINCT(categorie) FROM produit');
            
            $categories = $resultat->fetchAll();
            return $categories;
        }




    //recuperer un produit pr l'id
    //update
    //Delete



}