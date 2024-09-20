<?php
$random = rand(1, 100);
$pogingen = 0;


// verwijder regel 7 om de antwoorden te verbergen.
echo "$random\n";


// input van waar je het getal probeert te raden.
while (($input = readline("Raad het getal tussen 1 en 100, om de quiz te stoppen typ 'stop': ")) !== false) {


    // checkt als er stop in de readline hierboven staat en stopt de code daarna.
    if($input === "stop") {
        echo "de quiz is gestopt\n";
        break;
    }

    // output een echo waarbij hij zegt dat je een nummer van 1 en 100 moet invullen.
    if($input < 1) {
        echo "kies een getal tussen 1 en 100\n";
        break;
    }elseif($input > 100) {
        echo "kies een getal tussen 1 en 100\n";
        break;
    }else{

        // voegt een +1 bij de pogingen die je hebt bij het spel
        $pogingen++;


        // als je probeerdt te raden zegt hij of je te hoog bent of te laag.
        if($input < $random) {
            echo "Je getal ligt er onder\n";
        }elseif($input > $random) {
            echo "je getal ligt er boven\n";
        } else {

            // als je het goed heb geraden dan zegt hij welk nummer het is en hoeveel pogingen er zijn geweest.

            echo "je hebt de getal! het was $random. je hebt in $pogingen pogingen geraden!\n ";
            break;
        }
    }
}
?>