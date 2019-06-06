<?php
echo '<pre>'; print_r($donnees); echo '</pre>';?>

<ul class="col-md-4 offset-md-4 list-group text-centere mb-4">
     <?php foreach($donnees as $key => $value): ?>
            <li class="lis-group-item"><?= $key ?> : <?= $value ?></li>
     <?php endforeach; ?>
</ul>


