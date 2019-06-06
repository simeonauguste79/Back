<?php                           // A
function inclusionAutomatique($nomDeLaClasse) 
{   // require_once('A.class.php');
    echo $nomDeLaClasse .'<hr>';
    require_once($nomDeLaClasse.'.class.php');
    echo "on passe dans inclusionAutomatique()<hr>";
    echo "require_once('$nomDeLaClasse.class.php')<hr>";
}

spl_autoload_register('inclusionAutomatique');
/*
    - spl_autoload_register() est une fonction prédéfinie qui s'execute automatiquement lorsque l'interpreteur voit passer le mot clé 'new'; donc lorsque l'on instancie une classe
    - En plus, nous demandons à spl_autoload_register() d'executer notre fonction inclusionAutomatique()
    - spl_autoload_register() recupère tout ce qu'il y a aprés le 'new' et l'envoi en argument de la fonction inclusionAutomatique(), c'est ce qui permet de faire appel au bon fichier dans lequel la classe est déclarée   
*/

// $a = new A;