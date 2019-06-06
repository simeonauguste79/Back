



<!--VERIFICATION EN PHP D'UN FORMULAIRE-->

<?php
echo '<pre>'; print_r($_POST); echo'</pre>';
//Un formulant permettant de contrôler que le pseudo soit compris entre 3 et 10 caracteres maximums sinon, message d'erreur
if($_POST) // si on valide le formulaire, on entre dans le IF
    {
        $error = '';
        // Exo 3 :
        // Si la taille du champs pseudo est inférieur à 2 ou si elle est supérieur à 20 alors on entre dans les accolades du IF
        if(iconv_strlen($_POST['pseudo']) < 3 || iconv_strlen($_POST['pseudo']) > 10)
        {
            echo  '<div class="col-md-4 offset-md-4 alert alert-primary text-center text-dark">Le pseudo doit contenir entre 3 et 10 caractères !! </div>';
        }
    }
        //Voir cours: Back/PHP/03-post/formulaire2.php
?>

