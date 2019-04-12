
<?php
echo '<hr><h2 class="display-4 text-center">Superglobales</h2><hr>';

echo '<pre>'; print_r($_POST); echo '</pre>'; 


?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--CDN BS-->

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--Lien Fontawesom-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
     <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="../TP_pois_gourmand/css/index.css">
    <title>AU POIS GOURMAND</title>
</head>
<body>
    
<div class="container">
    <header class="col">
    <div class="row md-2 ">
    <i class="fas fa-kiwi-bird"></i>
    </div>
    <div class="row md-4"></div>
     Au Gourmand
    </header>
    <section class="row">
        <div class="col">
            <div class="card offset-md-2" style="width: 18rem;">
                <img src="../TP_pois_gourmand/img/rome.jpg" class="card-img-top" alt="rome.jpg">
                <div class="card-body">
                    <h6 class="card-text">Formule rome</h6>
                    <p>Tomate brutina <br>
                    Rizotto aux asperges <br>
                    Panna cotta <br>
                    </p>
                    <button type="submit" class="col-md-12 btn btn btn-info mb-4">Enregistrer</button>
                </div>
                </div>
        </div>
        <div class="col">
            <div class="card offset-md-2" style="width: 18rem;">
                <img src="../TP_pois_gourmand/img/nyork.jpg" class="card-img-top" alt="nyork.jpg">
                <div class="card-body">
                    <h6 class="card-text">Formule New York</h6>
                    <p>Cesar Salade <br>
                    Cheese burger <br>
                    Cheseecake <br>
                    </p>
                    <button type="submit" class="col-md-12 btn btn btn-danger mb-4">Enregistrer</button>
                </div>
                </div>
        </div>
    </section>
    
    <section class="row">
        <div class="col">
            <div class="card offset-md-2" style="width: 18rem;">
                <img src="../TP_pois_gourmand/img/delhi.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 class="card-text">Formule Delhi</h6>
                    <p>Popadom <br>
                    Agneau Byriani <br>
                    Lassi Mangue <br>
                    </p>
                    <button type="submit" class="col-md-12 btn btn btn-warning mb-4">Enregistrer</button>
                </div>
                </div>
        </div>
        <div class="col">
            <div class="card offset-md-2" style="width: 18rem;">
                <img src="../TP_pois_gourmand/img/hanoi.jpg" class="card-img-top" alt="hanoi.jpg">
                <div class="card-body">
                    <h6 class="card-text">Formule Hanois</h6>
                    <p>Nem aux crevettes <br>
                   Poulet saté <br>
                    Perle de Coco <br>
                    </p>
                    <button type="submit" class="col-md-12 btn btn btn-primary mb-4">Enregistrer</button>
                </div>
            </div>
        </div>
    </section>
    
    <section>
<div class=" bg-info text-white">Merci pour votre commande</div>
    <div class="row">

        
        <div class="col-md-2">
            <img src="img/nyork.jpg" class="card-img" alt="...">
        </div>

        <div class="col-md-8">

            <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <div class="row-md-6 ml: 2rem; p-2 of bg-success text-white mt: 2rem;">choisir un autre menu</div>
            </div>
    </div>
            <div class="row-md-2 offset-md-6">
                    <div class="card md-2" style="width: 18rem;">
                    <div class="card-body"></div>
        <img src="../TP_pois_gourmand/img/pg.jpg" class="card-img" alt="...">
             </div>

    </section>
    
    <footer class="col">
    <div class="row-md-4 offset-md-8">
    <i class="fas fa-kiwi-bird"></i>
    </div>

    </footer>
</div>



<!--CDN JS-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
