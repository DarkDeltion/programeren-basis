<?php

$naam = readline("Geef jouw naam : ");
$leeftijd = readline("Geef jouw leeftijd : ");

echo "Hallo $naam \n";

if ( $leeftijd < 25 ) {
        echo "Jij bent jonger dan 25 jaar.\n";
}
if ( $leeftijd > 25 ) {
        echo "Jij bent ouder dan 25 jaar.\n";
}
if ( $leeftijd == 25 ) {
        echo "Jij bent precies 25 jaar.\n";
}