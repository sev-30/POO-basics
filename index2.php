<?php

// index2.php


require_once 'Car.php';

$car = new Car('yellow', 5, 'gasoline');

// Moving car

echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake(); 
