<?php
echo '<pre>'; print_r($_GET); echo'</pre>';

        switch ($_GET['pays'])
         {
            case 'fr':
                echo 'Vous etes sur un site en français<br>';
                break;
            case 'es':
                echo 'Vous etes sur un site en espagnol<br>';
                break;
            case 'an':
                echo 'Vous etes sur un site en anglais<br>';
                break;
            case 'dz':
                echo 'Vous etes sur un site en arabe<br>';
                break;
        }
        




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<!--CDN BS-->

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <title>Pays</title>
</head>
<body>
    
    <h2>Votre langue : </h2>

        <ul class="col-md-2 offset-md-5 list-group">
            <li class="list-group-item"><a href="?pays=fr">France</a></li>
            <li class="list-group-item"><a href="?pays=it">Italie</a></li>
            <li class="list-group-item"><a href="?pays=es">Espagne</a></li>
            <li class="list-group-item"><a href="?pays=an">Angleterre</a></li>
        </ul>


  
      <!--CDN JSQ-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>