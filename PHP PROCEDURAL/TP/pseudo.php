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
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--CDN BS-->

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Membre</title>
</head>
<body>

<h1 class="col-md-12 text text-center text-primary">Membre</h1>
<section class="col-12 col-md-6-mb3">
        <form method="post" action="">
          <fieldset>
        
           <legend></legend>
           <div class="form group col-md-3 offset-md-2 text text-primary">
               <label for="pseudo">Pseudo</label>
               <input type="text" name="pseudo" id="pseudo" class="form-control" placeholder="votre pseudo">
           </div>
           
           <div class="form group col-md-3 offset-md-2 text text-primary">
               <label for="mdp">Mot de pass</label>
               <input type="text" name="mdp" id="mdp" class="form-control" placeholder="Votre mot de pass">
           </div>
           
           <div class="form group col-md-3 offset-md-2 text text-primary">
               <label for="email">Votre Email</label>
               <input type="text" name="email" id="email" class="form-control" placeholder="Entrez votre Email">
           </div>
           
           <div class="form group col-md-3 offset-md-2 text text-primary">
               <button type="submit" class="btn btn-primary">envoyer</button>
           </div>
          </fieldset>
        </form>
</section>




 <!--CDN JSQ-->  

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>