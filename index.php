<?php

// Destructuration en fonctions pour faciliter la lisibilité.

// Fonctions qui retourne la moyenne de la valeur des moutons
function calcSumMouton($array){
    $sum = 0;
    foreach ($array as $mouton) {
    	$sum = $sum + $mouton[1];
    }
    return $sum;
}

// Fonction qui retourne un nom aléatoire
function rdmNameMouton(){
    $chaine = "abcdefghijklmnpqrstuvwxyABCDEFGHIJKLMNOPQRSUTVWXYZ";    
    $nbChars = strlen($chaine);
    $randNameMouton = "";
	$nbCharsNameMouton = rand(3,15);
	for ($k=0; $k<$nbCharsNameMouton; $k++){
        $randNameMouton .= $chaine[rand(0, ($nbChars-1))];
    }
    return $randNameMouton;
}

// Fonction qui retourne une valeur aléatoire pour un mouton
function rdmValMouton(){
    return $randValMoutons = rand(10,200);
}

// Un tableau de moutons
$moutons = [['Danny', 75], ['Richard',60]];

// J'ajoute un mouton
array_push($moutons, ['Gérard',120]);

// Je calcule la moyenne de la valeur de mes moutons
$sumValMoutons = calcSumMouton($moutons);
$moyValMoutons = $sumValMoutons/count($moutons);

// Ajout de 100 moutons aléatoires
for ($j=0; $j < 100; $j++) { 
    $rdmName = rdmNameMouton();
    $rdmVal = rdmValMouton();
	array_push($moutons, [$rdmName, $rdmVal]);
}

// nombre de mouton total 
$arrCount = count($moutons);

// calcule de la somme
$sumTotalMoutons = calcSumMouton($moutons);


// Résultats
echo "Valeur total des moutons : ".$sumTotalMoutons." €";
echo "<br>";
echo "Nombre de moutons : ".$arrCount;
echo "<br>";
$average = $sumTotalMoutons / $arrCount;
echo "Valeur moyenne (avec précision) : ".$average." €"; 
echo "<br>";
echo "Valeur moyenne d'un mouton : ".round($average)." €";


?>