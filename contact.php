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
    <link rel="stylesheet" href="contact.css" />
</head>

<?php

require_once "header.php";

?>


<section class="container5">
    <div class="container5-1">

        <div class="container5-1G">
            <div class="blocGauche">
                <div class="blocHaut">
                    <div class="titreHaut">Contactez-nous</div>
                    <div class="ssTitreHaut">Restons en contact</div>
                </div>
                <div class="blocMilieu1">
                    <div class="BMG">
                        <div class="blocName"><input class="BN" type="texte" placeholder="Prénom"></input></div>
                        <div class="blocName"><input class="BN" type="texte" placeholder="Nom"></input></div>
                        <div class="blocName"><input class="BN" type="number" placeholder="+33 Phone"></input></div>
                        <div class="blocName"><input class="BN" type="email" placeholder="Email@"></input></div>

                    </div>
                    <div class="BMD">
                        <div class="blocMessage">
                            <input class="BMess" type="textarea" placeholder="Votre Message"></input>
                        </div>
                    </div>
                </div>
                <div class="blocBas">
                    <button type="submit" class="boutonEnvoyer">Envoyer</button>
                </div>
            </div>
        </div>

        <div class="container5-1D">
            <div class="blocQSN">
                <div class="imageQSN">
                    <div class="blocTitre">
                        <div class="titre">Qui sommes nous!</br> CocoBino</div>
                    </div>
                    <div class="blocDesc">
                        <div class="desc">le Lorem Ipsum est simplement du fa est simplement du fa est simplement du faux texte employésqd rvivre cinq siècles</div>
                    </div>
                    <div class="blocBouton">
                        <button class="savoirplus">En savoir plus</button>
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>

<script src="app.js"></script>
</body>

</html>