/*   b_Tour_1 javascript  */
/* Tim Glatthard, Carmina Grünig, Joel Viotti */


/* Button-group Anreise, jeweiligen Text anzeigen */
$(document).ready(function() {
    $('button').click(function(event) {
    	/* die var pickedOption beinhaltet die jeweilige ID des Buttons, auf welchen geklickt wurde */
        var pickedOption = event.target.id;

        if (pickedOption == "fuss"){
        	$(".anreiseText").text("Zu Fuss: Von Bahnhof Biel aus ca. 5 Minuten Richtung Schiffländte gehen. Von der Schiffländte ca. 2 Minuten der Ländtestrasse entlang bis zum Seeufer.");
        }
        else if (pickedOption == "auto") {
        	$(".anreiseText").text("Auto: Bernstrasse entlang bis Seelandgymnasium Biel. Dort rechts einbiegen zu den angeschriebenen Parkplätzen. Von den Parkplätzen aus ca. 3 Minuten Gehweg der Ländtestrasse entlang bis zum Seeufer.");
        }
        else if (pickedOption == "oeV") {
        	$(".anreiseText").text("ÖV: Bei Bahnhof Biel Bus Nummer 2 Richtung Schiffländte nehmen, bis Station Schiffländte. Anschiessend ca. 2 Minuten der Ländtestrasse entlang bis zum Seeufer.");
        }
    });
});
