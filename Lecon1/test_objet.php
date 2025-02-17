<?php
include 'maison.php';
include 'vehicule.php';
include 'moto.php';

/* Exercice maisons */
// Test des setters

$maison = new Maison('maison bleue', 14, 5, 2);
echo 'Le nom de la maison est : ' .$maison->getNom(). ".";
echo "<br> <br>";
echo 'La longueur de la maison est de : ' .$maison->getLongueur(). 'm.';
echo "<br> <br>";
echo 'La largeur de la maison est de : ' .$maison->getLargeur(). 'm.';
echo "<br> <br>";
echo 'Le nombre d\'étages de la maison est de : ' .$maison->getNbrEtage(). ' étage(s).';
echo "<br> <br>";
echo $maison->surface();
echo "<div style='border-bottom : 3px solid black'> </div>";
echo "<br> <br>";

// Test des getters

$maison->setNom('MimosaHouse')->setLongueur(10)->setLargeur(5)->setNbrEtage(4);
echo "<br> <br>";
echo 'Le nom de la maison est : ' .$maison->getNom(). ".";
echo "<br> <br>";
echo 'La longueur de la maison est de : ' .$maison->getLongueur(). 'm.';
echo "<br> <br>";
echo 'La largeur de la maison est de : ' .$maison->getLargeur(). 'm.';
echo "<br> <br>";
echo 'Le nombre d\'étages de la maison est de : ' .$maison->getNbrEtage(). ' étage(s).';
echo "<br> <br>";
echo $maison->surface();
echo "<div style='border-bottom : 3px solid black'> </div>";
echo "<br> <br>";

/* Exercice véhicules */

$mercedesCLK = new Vehicule('Mercedes CLK', 4, 250);
$HondaCBR = new Moto("Mon super Guidon");

//Moto hérite de la classe Vehicule, donc elle a accès au Getter et Setter de Vehicule
$HondaCBR->setNomVehicule('Honda CBR')->setNbrRoue(2)->setVitesseMax(280);
echo "<br> <br>";
echo 'Le nom du véhicule est : ' .$mercedesCLK->getNomVehicule() . '<br>';
echo 'Le nombre de roues est de : ' .$mercedesCLK->getNbrRoue() . ' roues<br>';
echo 'La vitesse max est de : ' .$mercedesCLK->getVitesseMax(). ' km/h<br>';
echo 'Type de véhicule : ' .$mercedesCLK->detect(). '<br>';
$mercedesCLK->boost(50);
echo 'Avec le boost, la voiture atteint : ' .$mercedesCLK->getVitesseMax(). ' km/h<br>';

echo "<br> <br>";
echo 'Le nom du véhicule est : ' .$HondaCBR->getNomVehicule() . '<br>';
echo 'Le nombre de roues est de : ' .$HondaCBR->getNbrRoue() . ' roues<br>';
echo 'La vitesse max est de : ' .$HondaCBR->getVitesseMax(). ' km/h<br>';
echo 'Type de véhicule : ' .$HondaCBR->detect(). '<br>';
$HondaCBR->boost(50);
echo 'Avec le boost, la moto atteint : ' .$HondaCBR->getVitesseMax(). ' km/h<br>';

echo "<div style='border-bottom : 3px solid black'> </div>";
echo "<br> <br>";
$plusRapide = $mercedesCLK->plusRapide(vehicule: $HondaCBR);
if(gettype($plusRapide) == "string"){
    echo $plusRapide;
} else {
    echo $plusRapide->getNomVehicule(). " est le véhicule le plus rapide.";
}