<?php

spl_autoload_register(function ($class_name) {
    
    require_once $class_name . '.php';
});

// *** Player ***
$player1 = new Player("James", "LeBron", 206); // Lakers
$player2 = new Player("Westbrook", "Russell", 208); //Lakers
$player3 = new Player("Curry", "Stephen", 188); //Warriors
$player4 = new Player("Lauvergne", "Joffrey", 211); //Asvel fr

// *** Country ***
$France = New Country("France");
$Usa = New Country("Usa");

// *** Nat ***
$Us = New Nationality("Americaine");
$Fra = New Nationality("Francaise");

// *** Club ***
$Lakers = New Club("Lakers", $Usa);
$Warriors = New Club("Warriors", $Usa);
$Asvel = New Club("Asvel", $France);

// *** Career ***
$Career1 = New Career($Asvel, $player4, $France);
$Career2 = New Career($Lakers, $player1, $Usa);
$Career2 = New Career($Lakers, $player2, $Usa);
$Career3 = New Career($Warriors, $player3, $France);



// $Usa->addClub($Lakers);
// $Usa->addClub($Warriors);
echo $Usa->afficherCountryClub();
echo $player4->afficherClubDuJoueur();
echo $Lakers->afficherJoueurDuClub();

