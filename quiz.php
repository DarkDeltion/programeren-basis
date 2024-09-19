<?php
$random = rand(1, 100);
$pogingen = 0;

echo "$random\n";

while (($input = readline("Raad het getal tussen 1 en 100: ")) !== false) {
    
    if($input < 1) {
        echo "kies een getal tussen 1 en 100\n";
        break;
    }elseif($input > 100) {
        echo "kies een getal tussen 1 en 100\n";
        break;
    }else{

        $pogingen++;

        if($input < $random) {
            echo "Je getal ligt er onder\n";
        }elseif($input > $random) {
            echo "je getal ligt er boven\n";
        } else {
            echo "je hebt de getal goed geraden in $pogingen pogingen!\n ";
            break;
        }
    }
}
?>