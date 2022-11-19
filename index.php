<?php

require_once "vendor/autoload.php";


use App\Report;


$cityChose = readline("Search city :) -> ");
$emptyClass = new Report($cityChose);



do {
    $userSelection = readline("Press [1] if you want get ALL information. \n Press [2] if you want get information only about Temperature -> ");

} while($userSelection >= 3 || $userSelection < 0 );
echo "\n";


if ($userSelection == 1) {
    echo "City is: " . $emptyClass->getName() . "\nDegree: " . $emptyClass->getTemp() . "\nDegree Feels like: " . $emptyClass->getFeel() ."\nWind speed is: ". $emptyClass->getWind() . "\nGood luck";

} elseif ($userSelection == 2) {

    echo "City is: " . $emptyClass->getName() . "\nDegree: " . $emptyClass->getTemp() . "\nGood luck";
}
