<?php
include 'maison.php';

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