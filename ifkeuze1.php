<?php

$naam = readline("Geef jouw naam : ");
$leeftijd = readline("Geef jouw leeftijd : ");

echo "Hallo $naam \n";

if ( $leeftijd < 21 ) {
        echo "Jij bent jonger dan 21 jaar.\n";
}
if ( $leeftijd > 21 ) {
        echo "Jij bent ouder dan 21 jaar.\n";
}
if ( $leeftijd == 21 ) {
        echo "Jij bent precies 21 jaar.\n";
}