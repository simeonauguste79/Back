<!--ZONE SCRIPT PHP-->
<?php

echo '<pre>'; print_r($_POST); echo '</pre>'; 

echo '<hr><h2 class="display-4 text-center">Récuperations saisies sur 2 pages</h2><hr>';



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!--CDN BS-->

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Voiture</title>
</head>
<body>
    <h1 class="form-group md-6 text-center text-primary">Voiture</h1>
 <form class="col-md-6 offset-md-4" method="post" action="formulaire2.php">
    
 
 
         <div class="form-group col-md-6">
         <label for="marque">Marque</label>
        <input type="text" class="form-control" id="marque" name="marque" placeholder="Marque">
    </div>

    <div class="form-group col-md-6">
   
         <label for="prenom">Model</label>
        <input type="text" class="form-control" id="model" name="model" placeholder="Model">
    </div>
     
    <div class="form-group col-md-6">
    <label for="adresse">Couleur</label>
    <input type="text" class="form-control" id="couleur" name="couleur" placeholder="Enter couleur">
</div>

<div class="form-group col-md-6">
    <label for="km">Kilometre</label>
    <input type="text" class="form-control" id="km" name="kilometre" placeholder="Enter kilometre">
    </div>

    <div class="form-group col-md-6">
    <label for="prix">Prix</label>
    <input type="text" class="form-control" id="prix" name="prix" placeholder="Enter prix">
    
    
    <div class="form-group col-md-6">
    <label for="puissance">Puissance</label>
    <select id="puissance" class="form-control" name="puissance">
        <option selected>Choose...</option>
        <option value="puissance">147ch</option>
        <option value="puissance">190.ch</option>
        <option value="puissance">211.ch</option>
        <option value="puissance">220.ch</option>
        <option value="puissance">240.ch</option>
        <option value="puissance">250.ch</option>
        <option value="puissance">260.ch</option>
        <option value="puissance">270.ch</option>
        <option value="puissance">280.ch</option>
        <option value="puissance">290.ch</option>
        <option value="puissance">300.ch</option>
        <option value="puissance">310.ch</option>
        <option value="puissance">340.ch</option>
        <option value="puissance">500.ch</option>
    </select>
    </div>
    </div>

    <div class="form-group col-md-6">
             <label for="puissance">Option</label>
        <select id="puissance" class="form-control" name="option">
            <option selected>Choisir mode acaht</option>
            <option value="comptant">Comptant</option>
            <option value="5">En 5 ans</option>
            <option value="10">En 10 ans</option>
        </select>
    </div>
    
  


    <div>
      <button type="submit" class="btn btn-dark">envoyer</button>
    </div>
    
</form>

<?php 
foreach($_POST as $key => $value)
    {
        echo "$key => $value<br>"; 
    }
    echo '<hr>';
echo '<pre>'; print_r($_POST); echo '</pre>'; 

?>

    <!--CDN JSQ-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
    


