let toggle = document.querySelector('.toggle');
let body = document.querySelector('body');

toggle.addEventListener('click', function () {
    body.classList.toggle('open');
})



/*-----------------------------------
        INSCRIPTION
-------------------------------------*/

/*
document.getElementById('inscription').addEventListener('submit', function (e) {


    var erreur;

    var mdp = document.getElementById("mdp");
    var mdp2 = document.getElementById("mdp2");

    if (!mdp.value) {
        erreur = "mot de passe erreur";
    }

    if (!mdp2.value) {
        erreur = "mot de passe erreur";
    }

    if (erreur) {
        e.preventDefault();
        document.getElementById('erreur').innerHTML = erreur;
        console.log(erreur);
        return false;
    }
    else {
        alert("formulaire envoyé");
    }

});
*/