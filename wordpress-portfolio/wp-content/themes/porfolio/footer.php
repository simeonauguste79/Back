
</section>

<?php wp_footer(); ?> 
<!-- wp_footer permet de charger des fichiers indispensables à wordress en CDN  BOOSTRAP en bas de page -->
<footer>
    <div class="container-fluid px-0">
        <div class="d-flex">
            <div class="col-md-4 bg-success hauteur">
                <?php dynamic_sidebar('bas-gauche'); ?>
            </div>

            <!-- dynamic_sidebar() fonction wordPress qui permet de faire appel aux regions que l'on a créé dans la sidebar -->
            <div class="col-md-4 bg-warning hauteur">
                <?php dynamic_sidebar('bas-centre'); ?>
            </div>
            <div class="col-md-4 bg-info hauteur ">
                <?php dynamic_sidebar('bas-droit'); ?>
            </div>
        </div>
    </div>
</footer>



<!-- CDN BOOSTRAP -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>