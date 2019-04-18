<!--ZONE SCRIPT PHP-->
<?php

echo '<pre>'; print_r($_POST); echo '</pre>'; 

echo '<hr><h2 class="display-4 text-center">Récuperations saisies du Formulaire</h2><hr>';



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!--CDN BS-->

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Formulaire</title>
</head>
<body>
    <h1 class="form-group md-6 text-center text-primary">Formulaire</h1>
 <form method="post" action="" class="col-md-6 offset-md-3 form1">
    
 
 
         <div class="form-group col-md-6">
         <label for="mnom">Nom</label>
        <input type="text" class="form-control" id="mnom" name="nom" placeholder="Enter nom">
    </div>

    <div class="form-group col-md-6">
   
         <label for="prenom">Prenom</label>
        <input type="text" class="form-control" id="mnom" name="nom" placeholder="Enter prenom">
    </div>
     
    <div class="form-group col-md-6">
    <label for="adresse">Adresse</label>
    <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Enter adresse">
</div>

<div class="form-group col-md-6">
    <label for="ville">Ville</label>
    <input type="text" class="form-control" id="ville" name="ville" placeholder="Enter ville">
    </div>

    <div class="form-group col-md-6">
    <label for="code_postal">Code Postal</label>
    <input type="text" class="form-control" id="code_postal" name="code_postal" placeholder="Enter code postal">
    </div>

    <div class="form-group col-md-6">
    <label for="sexe">Sexe</label>
    <select id="sexe" class="form-control" name="sexe">
        <option selected>Choose...</option>
        <option value="m">Monsieur</option>
        <option value="f">Madame</option>
    </select>
    </div>

    <div class="form-group col-md-6">
       <textarea type="text" class="form-control" name="description" id="description" cols="30" rows="10">Description</textarea>


    <div>
      <button type="submit" class="btn btn-dark">envoyer</button>
    </div>
    
</form>

    <!--CDN JSQ-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
    


