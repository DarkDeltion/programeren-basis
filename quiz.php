<?php
$random = rand(1, 100);
$getal = 0.5;

echo "$random\n";

while ($input = readline("Raad het getal tussen 1 en 100: ")) {
    
    if ($input < 1 || $input > 100) {
        echo "Voer een getal tussen 1 en 100 in.\n";
        exit; 
    };


    if($input < $random) {
        echo "Je getal ligt er onder\n";
    }elseif($input > $random) {
        echo "je getal ligt er boven\n";
    } else {
        echo "je hebt de getal goed geraden!\n ";
        break;
    }
}
?>