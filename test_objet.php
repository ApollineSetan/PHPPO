<?php
include 'maison.php';
include 'vehicule.php';
include 'moto.php';

/* Exercice maisons */

$maisonBleue = new Maison('maison bleue', 14, 5, 2);
echo $maisonBleue->getNom();
echo "<br> <br>";
echo $maisonBleue->getLongueur();
echo "<br> <br>";
echo $maisonBleue->getLargeur();
echo "<br> <br>";
echo $maisonBleue->getNbrEtage();
echo "<br> <br>";
echo $maisonBleue->surface();

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
$mercedesCLK->boost();
echo 'Avec le boost, la voiture atteint : ' .$mercedesCLK->getVitesseMax(). ' km/h<br>';

echo "<br> <br>";
echo 'Le nom du véhicule est : ' .$HondaCBR->getNomVehicule() . '<br>';
echo 'Le nombre de roues est de : ' .$HondaCBR->getNbrRoue() . ' roues<br>';
echo 'La vitesse max est de : ' .$HondaCBR->getVitesseMax(). ' km/h<br>';
echo 'Type de véhicule : ' .$HondaCBR->detect(). '<br>';
$HondaCBR->boost();
echo 'Avec le boost, la moto atteint : ' .$HondaCBR->getVitesseMax(). ' km/h<br>';
