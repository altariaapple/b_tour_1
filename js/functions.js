/*   b_Tour_1 javascript  */
/* Tim Glatthard, Carmina Grünig, Joel Viotti */

/* ---------- index.php ----------- */
/* -------------------------------- */


/* Button-group Anreise, jeweiligen Text anzeigen */
/*Profil.php Anzeigen Inhalte, je nach  Buttons */

$(document).ready(function() {
          $("section#profilfoto").show();
          $("section#meinefotos").hide();
          $("section#favoriten").hide();
          $("section#follower").hide();
});

$(document).ready(function() {
    $('button').click(function(event) {
    	/* die var pickedOption beinhaltet die jeweilige ID des Buttons, auf welchen geklickt wurde */
        var pickedOption = event.target.id;

        if (pickedOption == "profilfoto"){
            $("section#profilfoto").show();
            $("section#meinefotos").hide();
            $("section#favoriten").hide();
            $("section#follower").hide();
        }
        else if (pickedOption == "meinefotos"){
            $("section#meinefotos").show();
            $("section#profilfoto").hide();
            $("section#favoriten").hide();
            $("section#follower").hide();
        }
        else if (pickedOption == "favoriten"){
            $("section#favoriten").show();
            $("section#profilfoto").hide();
            $("section#meinefotos").hide();
            $("section#follower").hide();
        }
        else if (pickedOption == "follower"){
          $("section#follower").show();
          $("section#profilfoto").hide();
          $("section#meinefotos").hide();
          $("section#favoriten").hide();
        }

    });
});
