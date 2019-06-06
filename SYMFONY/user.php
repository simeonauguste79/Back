<?php
// user.php
class User 
{
    private $pseudo;
    private $prenom;
    public $email;
    public$password;
    public $date_naissance;

    //...
}

public function setPrenom($prenom)
{

    if(! empty($prenom))
    {
        if(strlen($prenom) >= 3 && strlen($prenom) <= 20)
        {
            $user->prenom = $prenom;
        }
    }
    
    class Admin extends User
    {
        public function setPassword()
        {
            $this->password = $password;
        }
    }

    //-----------------------RÔLE AUTOLOAD------------------

    
}
//------------------------INSTANCIER
$user = new user;

//Enregistrement du prenom
$user->prenom = $_POST['prenom'];
echo 'Prénom :' . $user->prenom;



?>