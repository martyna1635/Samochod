<?php

include ('samochodWyscigowy.php');
include ('silnik.php');

$nSamochodWyscigowy = new samochodWyscigowy('BMW','A3',1450,120);

echo 'Predkosc maksymalna wynosi: ';
echo $nSamochodWyscigowy->getPredkoscMaksymalna();
echo ("\n");

echo 'Przyspieszenie to ';
echo $nSamochodWyscigowy->getPrzyspieszenie();
echo ("\n");

?>
