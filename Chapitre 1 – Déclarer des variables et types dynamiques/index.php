<?php


$nom = "John";
$age = 30;
$prix = 19.99;
$estMembre = true;



echo "Nom: " . $nom . "<br>";
echo "Age: " . $age . "<br>";
echo "prix: ". $prix. "<br>";
echo "est membre:".($estmembre? "oui" : "non") ."<br>";



$numero = "10";;
$intnumero = (int)$numero;
echo "conversion: ". $intnumero. "<br>";



var_dump($numero);
var_dump($nom);
var_dump($intnumero);


?>