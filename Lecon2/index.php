<?php
include './AbstractClass/AbstractPersonnage.php';
include './Interface/InterfaceArme.php';
include './Comportement/Arc.php';
include './Comportement/Epee.php';
include './Comportement/ProjectileMagique.php';
include './Model/Guerrier.php';
include './Model/Magicien.php';
include './Model/Voleur.php';


$epee = new Epee(50, type: "glaive");

$guerrier = new Guerrier("Hagrid", $epee, "guerrier");
echo 'Le nom du guerrier est : ' .$guerrier->getNom(). ".<br>";
echo ' ' .$guerrier->attaquer();
echo ' ' .$guerrier->getArme()->attaquer();

echo "<div style='border-bottom : 3px solid black'> </div>";

$voleur = new Voleur("Ariel", new Arc(), "voleur");
echo 'Le nom du voleur est : ' .$voleur->getNom(). ".<br>";
echo ' ' .$voleur->attaquer();
echo ' ' .$voleur->getArme()->attaquer();

echo "<div style='border-bottom : 3px solid black'> </div>";

$magicien = new Magicien("Père Fourras", new ProjectileMagique(), "magicien", 50 );
echo 'Le nom du magicien est : ' .$magicien->getNom(). ".<br>";
echo ' ' .$magicien->attaquer();
echo ' ' .$magicien->getArme()->attaquer();