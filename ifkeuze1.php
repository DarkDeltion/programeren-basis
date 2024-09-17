<?php

$naam = readline("Geef jouw naam : ");
$leeftijd = readline("Geef jouw leeftijd : ");

$actueleleeftijd = "21";

echo "Hallo $naam \n";

if ( $leeftijd < $actueleleeftijd ) {
        echo "Jij bent jonger dan $actueleleeftijd jaar.\n";
}
if ( $leeftijd > $actueleleeftijd ) {
        echo "Jij bent ouder dan $actueleleeftijd jaar.\n";
}
if ( $leeftijd == $actueleleeftijd ) {
        echo "Jij bent precies $actueleleeftijd jaar.\n";
}