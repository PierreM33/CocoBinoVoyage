<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cocobino</title>
    <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pack.css" />

</head>

<?php


require_once "header.php";

?>

<section class="container7">
    <div class="container7-1">
        <div class="background">
            <div class="blocHaut">
                <div class="blocTitre">
                    <div class="titreBlocHaut">Découvrez tous les voyages du pack aventure</div>
                </div>
                <div class="blocDesc">
                    <div class="description">Des voyages palpitants sur mesure</div>
                </div>
            </div>
            <div class="blocBas">
                <div class="listeCenter">
                    <div class="blocB1">
                        <button class="bouton1">Populaire</button>
                    </div>
                    <div class="blocB2">
                        <button class="bouton2">Récent</button>
                    </div>
                    <select class="liste" name="" id="">
                        <option value="aventure">Aventure</option>
                        <option value="family">Family</option>
                        <option value="coco">Coco</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="app.js"></script>
</body>

</html>