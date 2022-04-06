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
    <link rel="stylesheet" href="inscription.css" />
</head>


<?php

require_once "header.php";

?>

<section class="container8">
    <div class="container8-1">
        <div class="background">
            <div class="blocH">
                <div class="titreH">inscription</div>
                <div class="sstitre">Inscrivez-vous sur CocoBino</div>
            </div>
            <div class="blocM">
                <div class="formulaire">
                    <form method="post" id="inscription" action="php/inscription.php">
                        <input class="input" type="mail" name="mail" placeholder="@" /></br>
                        <input class="input" type="text" name="user" placeholder="Nom d'tilisateur" /></br>
                        <input class="input" type="password" name="mdp" id="mdp" placeholder="Mot de passe" /></br>
                        <input class="input" type="password" name="mdp2" id="mdp2" placeholder="Répétez mot de passe" /></br>
                        <input class="input" type="number" name="phone" placeholder="Téléphone" />
                        <p style="color:red;" id="erreur"></p>
                </div>
                <div class="blocB">
                    <button type="submit" class="boutonInscription">inscription</button>
                    </form>
                </div>


            </div>
        </div>
</section>

<script src="app.js"></script>
</body>

</html>