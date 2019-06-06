<?php
class Conducteur
{
    //@prenom (string de 5 à 30 caractères)
    public $prenon;
    
    //nom (string de 5 à 30 caractères)
    public $non;

    public function setPrenom($prenom)
    {
        if(iconv_strlen($prenom) < 5 || iconv_strlen($prenom) > 30)
        {
            echo '<p> Le prenom doit contenir 5 et 30 carateres max ! </p>';
            return $this->error;
        }
        else
        {
            $this->prenom = $prenom;
            return $this;
        }
    }
    
    public function getPrenom()// un getteur ne reçoit jamais d'argument
    {
        return $this->prenom;
        // return $prenom->prenom;
    }


    public function setNom($nom)
    {
        if(iconv_strlen($nom) < 5 || iconv_strlen($nom) > 30)
        {
            echo '<p> Le nom doit contenir 5 et 30 carateres max ! </p>';
          return $this->error;
            //$nom->nom = 'Avigny';
        }
        else // nous tombons dans le else dans le cas suivant $nom->setNom()
        {
            $this->error = "Ce n'est pas un string !!";
            return $this->error;
        }
    }
    
    public function getNom()// un getteur ne reçoit jamais d'argument
    {
        return $this->nom;
        // return $nom->nom;
    }
    
    public function getInfos()
    {
        $info['prenom'] = $this->getPrenom();
        $info['nom'] = $this->getNom();
        return $info;
    }


}



?>