<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Entrainement</title>
</head>
<body>
<div class="container" >
   <h2 class="display-4 text-center">Ecriture et affichage</h2><hr>
   <!--ecrire le HTML dans un PHP est usuel, mais pas l'inverse. IMPOSSIBLE-->
   <?php //ouverture de la balise PHP

   //Il est impossible d'ouvrir la balise PHP autant de fois 


   echo 'Bonjour'; // Echo est une instruction d'affichahge que l'on peut traduire par "affiche moi"
   echo '<br>';
   //On peut écrire du HTMl dans le PHP
   print'bonjour'; //Autre instruction d'affichage 
   echo '<br>';





//Fermeture de la balise PHP
   ?> 
   <?= 'Allo'?> <!-- le = remplace le 'echo'-->
   <strong>Bonjour</strong><!--Nous voyons qu'il est simplement possible de fermer et de reouvrir PHP pour melanger du HTML et PHP-->
   <?php
   echo 'texte'; //ceci est un commentaire
   echo 'texte'; //commentaire
   echo '<hr><h2 class="display-4 text-center">variables: types/declarations</h2>'; 

   $a = 127; //affectation de variables 
   //gettype est une fonction predefinie qui retourne le t
   echo gettype($a);
   echo '<br>';
   $b = 1.5;
   echo gettype($b); //un nombre à virgule
   echo '<br>';
   
   $c = 'chaine';
   echo gettype($c);//Un string
   echo '<br>';
   
   $d = '127';
   echo gettype($d);// Une chaine de caractèere
   echo '<br>';
   
   $e = true;
   echo gettype($e);// Un boolean
   echo '<br>';
   echo '<hr><h2 class="display-4 text-center">Concatenation</h2>';
   $x = 'Bonjour';
   $y = 'Tout le monde';
   echo $x . $y . '<br>'; //Point de concatenation
   echo "$x $y <br>";
   echo '$x $y <br>';
   echo 'aujourd\'hui';

   echo "aujourd'hui <br>";

   // Concatener avec du texte

   echo "hey !" .$x.$y.'<br>';
   echo "<br>", "coucou" , "<br>";


echo '<hr><h2 class="display-4 text-center">Concatenation lors d\'affectation</h2>';
$prenom1 = 'Bruno';
$prenom1 = 'Claire';
echo $prenom1 . '<br>';

$prenom2 = 'Nicolas';
$prenom2 .= 'Marie'; //le point égal appelé la concatenation en appelation
echo $prenom2. '<br>';

echo '<hr><h2 class="display-4 text-center">Constante Magique</h2>';

/*Une constance comme une variable permet de conserver une valeur mais elle demeure constante */
define("CAPITALE", "Paris"); //Par convention, une constante se met toujours en majiscule
echo CAPITALE .'<br>';

// define("CAPITALE", "Rome");
// echo CAPITALE .'<br>'; 
//Constante magique
echo __FILE__ . '<br>'; //Affiche le chemin vers le fichier
echo __LINE__ .'<br>';//Affiche le numero de la ligne
//_FUNCTION_/_CLASS_/_METHOD_

/*************************************EXERCICE**************************************** */

/*/Afficher vert-jaune-rouge(avec les tirets) en mettant chaque dans une variable. Faire en sorte que chaque mot soit de la bonne couleur */ 
$vert = '<span class="text-success"> vert</span>';
$jaune = '<span class="text-warning"> jaune</span>';
$rouge = '<span class="text-danger"> rouge</span>';
echo "$vert-$jaune-$rouge <br>";
echo $vert . '-' . $jaune . '-' . $rouge. '<br>';

echo '<hr><h2 class="display-4 text-center">Operateurs Arythmetiques</h2>';

$a -= $b;// equivaut = 
$a *= $b;// equivaut = 
$a /= $b;// equivaut = 

$a = 10;
$b = 2;

echo$a + $b . '<br>';// affiche 10
echo$a - $b . '<br>';// affiche 8
echo$a * $b . '<br>';//affiche 20
echo$a / $b . '<br>';//affiche 5  

//operation / Affectation

$a += $b;// equivaut = 
echo$a. '<br>';
$a -= $b;// equivaut = 
echo
$a *= $b;// equivaut = 
$a /= $b;// equivaut = 

echo '<hr><h2 class="display-4 text-center">Structure conditionnelle</h2>';


$var1 = 0;
$var2 = '';
//empty teste si une variable est vide ou non 
if(empty($var1)){
     echo "0, vide ou non defini <br>";
}else{
     echo "cette variable n'est pas vide";
     //empty perùmet de tester si une variable ou , 
     if(isset($var2)){
     
}
      echo "var2 existe et est definie par rien <br>";
}//

/*OPERATION DE COMPARAISO
= EGAL À
== COMPARAISON DE LA VALEUR
=== COMPARAISON DE LA VALEUR ET DU TYPE
<
>
<=
>=
! 
!=
|| or ou 
&& AND ET
XOR condition exclusive

*/
$a = 10;
$b = 5;
$c = 2;


if($a > $b)
{
   echo"A est bien superieur à B <br>";
}
else 
{
 echo "non c'est Bqui est sup à A '<br>'";

}

//if / elseif/else

//elseif permet d'ajouter des cas supplementaires donc il ne peut y avoir plusieurs elseif dans un même casd.
//Si la conditions superieures est verifiée -------------


/*Condition exclusive*/

if($a == 10 XOR $b == 6)
{
echo 'ok condition exclusive <br>';
}

//Forme contractée : 2ème condition d'écriture


echo ($a == 10) ? "A est egal à 10 <br>" : "A n'est pas egal à 10 <br>";
//Condition ternaire : Le ? remplace le if et les deux points 'Else'
$A = 1;
$B = '1';
if($A ===$B)
{
  echo "il s'agit de la même chose <br>";
}
//Avec la présence du triple === 
//== comparaison valeur 
//triple égal c'est la comparaison de la valeur et le type


echo '<hr><h2 class="display-4 text-center">CONDITIONS SWITCH</h2>';

$perso = 'Mario';
switch($perso)
{
    case 'Luigi';
    echo " Vous avez choisi $perso <br>";
    case 'Toad';
    echo "Vous avez choisi $perso <br>";
    case 'Bowser';
    echo " Vous avez choisi $perso <br>";
    break;
    echo "Vous êtes fou<br>";
    default:
    echo "Vous êtes fou !! c'est Mario";
    break;
}
//Si on une grande comparaison de cas, la condition SWITCH 


/***************EXZERCICE***************/
$perso = 'Mario';
if($perso == 'Luigi')
{
 echo " Vous avez choisi $perso <br>";
}
elseif($perso == 'Toad')
{
   echo "Vous avez choisi $perso <br>";
}
// Pouvez-vous la 

echo '<hr><h2 class="display-4 text-center">FONCTION PREDEFINIE</h2>';

//https://www.php.net/manual/fr/indexes.functions.php
/*
Une fonction prédefinie permet un traitement
*/

echo 'date: ' . date("d/a/y") . '<br>';
/*Lorsqu'on utilise une fonction prédefinie il faut toujours savoir quoi envoyer comme argument, et ce que la fonction va retourner

*/


echo '<hr><h2 class="display-4 text-center">Traitement des chaines</h2>';

//strpos() => string position
$email = "ba.simeon@mail.com";
echo strpos($email, '@') .'<br>';

//strpos


$email2 = "Bonjour";
echo strpos($email2,"@" );
var_dump(strpos($email2, "@"));
echo '<br>';
//cette ligne ne sort rien, pourtant il y a bien qlq chose dedans.

//icon_

$phrase = 'mettez une phrase ici à cet endroit';
echo iconv_strlen($phrase) . '<br>';

//Une fonction predefinie qiui permet la taille du texte


$texte = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia delectus, cumque, laboriosam earum ut molestiae aperiam animi quae, aliquam commodi asperiores? Deleniti, recusandae. Ullam ex beatae temporibus itaque quos eaque.';
echo iconv_strlen($texte) . '<br>';
echo substr($texte, 0, 20) ."<a href=''>lire la suite</a>" ;
//Permet de de retourner une partie de la chaine
//1 la chaine à couper
//la position du debut
//3 position de la fin


echo '<hr><h2 class="display-4 text-center">LES FONCTIONS UTILISATEURS</h2>';

//Elle premet de créer 

function separation()//ici on declare la fonction
{ 
     echo "<hr><hr><hr>";
}
separation();// on declenche la fonction

//Fonction avec argument

function bonjour($qui)
{                 //Grgory
    return "Bonjour $qui <br>";
}  //retourne le resultat
echo bonjour('gregory');//
//fonction
echo bonjour('Etienne');
$prenom = 'Jacques';

echo bonjour($prenom);

/******************************************************************************************* */
function appliqueTva($nombre)
{
    return$nombre*1.2;
}
echo "500 euros avec Tva 20% font:".appliqueTva(500). '<br>';
//Pour calculer la taxe de 500€
/*********************************************EXERCICE***************************************************/ 
//pouviez-vous ameliorer cette fonction afin que l'on puisse calculer le taux de notre de Tva de notre choix (19.6,5.5, 7%)
// 1 + taux/100

function appliqueTva2($nombre, $taux)
{
    return $nombre*(1 + $taux/100);
}
echo "500 euros avec Tva 19.6% font:".appliqueTva2(500, 19.6). '<br>';
echo "500 euros avec Tva 5.5% font:".appliqueTva2(500, 5.5). '<br>';
echo "500 euros avec Tva 7% font:".appliqueTva2(500, 7). '<br>';

/**********************************FONTION METEO**************************************/
//executons la fontion par: 
echo meteo("été", 20); //On peut executer une fonction avant qu'elle ne soit declaré dans le code

function meteo($saison, $temperature)
{
    return "nous sommes en $saison et il est $temperature degré(s)<br>";
}

//EXO 

//Gerer le S de degré en fonction de la temperature. pensez à gerer l'article "en" été et "au" printemps

function exometeo($saison, $temperature)
{
    if($temperature > 1 || $temperature< -1)
    $degre = 'degrés';
    else
    $degre = 'degré';

    //-----------------------------------------------------------------------------

    if($saison == 'printemps')
    $art = 'au';
    else
    $art = 'en';
    return "Nous sommes $art $saison et il fait $temperature $degre<br>";
}

echo '<hr>';
echo exoMeteo('été', 2);
echo exoMeteo('automne', -2);

//ESPACE GLOBAL


function joursemaine()
{
    $jour = 'jeudi';
    return $jour;
    echo 'Allo !';

}
echo $jour;// cette variable est inconnue hors de la fonction.
//Il n'est pas possible d'appeler une variable declenchée vers l'espace global
$recup = joursemaine();
echo $recup . '<br>';

//-------------------------------------------------------------------------

//A L'INVERSE

$pays = 'France';
function affichagePays()
{
    global $pays;// Global permet d'exporter du global vers local avec le mot clé global
    return $pays;
}
echo affichagePays();


   ?>
   </div>
   <!--Biblioteque pour Boostrap-->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
   
</body>
</html>