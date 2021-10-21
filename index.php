<?php

require_once 'Vehicles.php';

$car = new Car('rose', 5, 'lente');
$bike = new Bicycle('Blue');
var_dump($bike);
var_dump($car);


echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

echo "<br>";
echo "<br>";


echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo $car->start();
echo '<br> Ma voiture est : ' . $car->getColor() . ', avec ' . $car->getNbSeats() . ' places' . ' et roule de façon : '. $car->getEnergy();
?>