<?php
class Vehicule
{
    //attribut
    
    //@prenom (string de 5 à 30 caractères)
    public $marque;
    //@prenom (string de 5 à 30 caractères)
    public $modele;
    //@couleur (string de 5 à 30 caractères)
    public $couleur;
    //@immatriculation(string 5 à 30)
    public $immatriculation;



   //une methode

   //------------------------------------------MARQUE------------------------------
    public function setMarque($marque)
    {
        if(iconv_strlen($marque) < 5 || iconv_strlen($marque) > 30)
        {
            echo '<p> la marque doit contenir 5 et 30 carateres max ! </p>';
          return $this->error;
            //$marque->marque = 'mercedes';
        }
        else // nous tombons dans le else dans le cas suivant $marque->setMarque()
        {
            $this->error = "Ce n'est pas un string !!";
            return $this->error;
        }
    }
    
    public function getMarque()// un getteur ne reçoit jamais d'argument
    {
        return $this->marque;
        // return $nom->nom;
    }
    
    //------------------------------------MODELE--------------------------------------
    
    
    public function setModele($modele)
    {
        if(iconv_strlen($mmodele) < 5 || iconv_strlen($modele) > 30)
        {
            echo '<p> le modele doit contenir 5 et 30 carateres max ! </p>';
          return $this->error;
            //$modele->modele = 'Cls';
        }
        else // nous tombons dans le else dans le cas suivant $marque->setMarque()
        {
            $this->error = "Ce n'est pas un string !!";
            return $this->error;
        }
    }
    
    public function getModele()// un getteur ne reçoit jamais d'argument
    {
        return $this->modele;
        // return $modele->modele;
    }
    
    //------------------------------------COULEUR----------------------------
    
    public function setCouleur($couleur)
    {
        if(iconv_strlen($couleur) < 5 || iconv_strlen($couleur) > 30)
        {
            echo '<p> la couleur doit contenir 5 et 30 carateres max ! </p>';
          return $this->error;
            //$coleur->couleur = 'vert';
        }
        else // nous tombons dans le else dans le cas suivant $marque->setMarque()
        {
            $this->error = "Ce n'est pas un string !!";
            return $this->error;
        }
    }
    
    public function getCouleur()// un getteur ne reçoit jamais d'argument
    {
        return $this->modele;
        // return $modele->modele;
    }
    //------------------------------------IMMATRICULATION----------------------------
    
    public function setImmatriculation($couleur)
    {
        if(iconv_strlen($immatriculation) < 5 || iconv_strlen($immatriculation) > 30)
        {
            echo '<p>'' immatriculation doit contenir 5 et 30 carateres max ! ''</p>';
          return $this->error;
            //$immatriculation->immatriculation = 'FG-953-HI';
        }
        else // nous tombons dans le else dans le cas suivant $marque->setMarque()
        {
            $this->error = "Ce n'est pas un string !!";
            return $this->error;
        }
    }
    
    public function getCouleur()// un getteur ne reçoit jamais d'argument
    {
        return $this->modele;
        // return $immatriculation->immatriculation;
    }
    //----------------------------------------getInfo
    public function getInfos()
    {
        $info['Mercedes'] = $this->getMarque();
        $info['Cls'] = $this->getModele();
        return $info;
    }



}



?>