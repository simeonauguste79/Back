<?php
class Etudiant
{
   //Attributs
   
    /*
    @prenom (string de 5 à 30 caractères)
    */
    private $prenom;
    /*
    @nom (string de 5 à 30))
    */
    private $nom;
    /*
    @email(email)
    */
    private $email;
    /*
    @téléphone (INT de 10 caractères)
    */
    private $telephone;

    //---------------Methode set et get pour prenom-------------------------------
    public function setPrenom($prenom)
    //On inclue le traitement de securité 
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
   
    //------------------------------------------Methode get-----------------------
    public function getPrenom()
    {
        return $this->prenom;
    }
    
    
    
    
    //---------------Methode set et get pour nom-------------------------------
    public function setNom($nom)
    {              
        if(iconv_strlen($nom) < 5 || iconv_strlen($nom) > 30)
        {
          
        }
        else
        {
            $this->nom = $nom;
            return $this;
        }
    }
   
    //------------------------------------------Methode get-----------------------
    public function getNom()
    {
        return $this->nom;
        // return $etudiant->nom;
    }
    
    
    
    
    //---------------Methode set et get pour Email-------------------------------
    public function setEmail($email)
    {              
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $this->error = '<p>Saisissez un email</p>';
            return $this->error;
        }
        else
        {
            $this->email = $email;
            return $this;
        }
    }
   
    //------------------------------------------Methode get-----------------------
    public function getEmail()
    {
        return $this->email;
        // return $etudiant->email;
    }
    
    
    
    //---------------Methode set et get pour telephone-------------------------------
    public function setTelephone($telephone)
    {              
        if(!preg_match('#^[0-9]{10}+$#', $telephone))
        {
            $this->error = '<p> saisisssez un numero de telephone</p>';
            return $this->error;
        }
        else
        {
            $this->telephone = $telephone;
            return $this;
        }
    }
   
    //------------------------------------------Methode get-----------------------
    public function getTelephone()
    {
        return $this->telephone;
        // return $etudiant->tetelephone;
    }
    
    //----------------------------------Getinfos()-------------------------------
    public function getInfos()
    {
        $info['prenom'] = $this->getPrenom();
        $info['nom'] = $this->getNom();
        $info['email'] = $this->getEmail();
        $info['telephone'] = $this->getTelephone();
        return $info;
    }








}



?>