<?php
class Autoload
{
    public static function chargement($class)
    {
        require('Controller/User.php');
    }


namespace Membre;
use PDO;
use Commentaire;
class User
{
    private $pdo;
    public function setPdo()
    {
        public function setpdo()
        {
            $pdo = new PDO()
        }
    }
}




}
//--------------------------------------------
spl_autoload_register(array('autload', 'chargeme'));
//A chaque qu'elle vera le mot 'new' apparait.
new user;
require('User.php');

/*
$a = new Autoload;
$a->chargement();
Autoload::chargement();
new User;
require('user.php);
*/
//Les Namespaces une sorte de tiroir où chacun peut garder ses travaux
// $user = new Membre\User 
// $user = new Commentaire\User 
//Les namespaces sont des tiroirs virtuels 
//nemespace est toujhours la premiere ligne de votre code 
?>