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
$arc = new Arc(50, type: "elfique");
$projectilemagique = new ProjectileMagique("puissance suprême");

$guerrier = new Guerrier("Hagrid", $epee, "guerrier");
$guerrier->afficher();
$degatsGuerrier = $guerrier->attaquer();

echo "<div style='border-bottom : 3px solid black'> </div>";

$voleur = new Voleur("Ariel", $arc, "voleur");
$voleur->afficher();
$degatsvoleur = $voleur->attaquer();

echo "<div style='border-bottom : 3px solid black'> </div>";

$magicien = new Magicien("Père Fourras", $projectilemagique, "magicien", 50 );
$magicien->afficher();
$degatsmagicien = $magicien->attaquer();

echo "<div style='border-bottom : 3px solid black'> </div>";

$guerrier->setArme($projectilemagique);
$guerrier->attaquer();


echo "<div style='border-bottom : 3px solid black'> </div>";
echo "<div style='border-bottom : 3px solid black'> </div>";
echo "<div style='border-bottom : 3px solid black'> </div><br>";


echo "Fiches personnages :<br>
-Nom : " .$magicien->getNom()."<br>
-Classe : " .$magicien->getType()."<br>
-Points de mana : " .$magicien->getMana()."<br><br>
-Nom : " .$voleur->getNom()."<br>
-Classe : " .$voleur->getType()."<br><br>
-Nom : " .$guerrier->getNom()."<br>
-Classe : " .$guerrier->getType()."<br><br>
";