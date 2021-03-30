<?php

// index.php


require_once 'Bicycle.php';

$bike = new Bicycle('blue', 15, 1, 2);
// var_dump($bike);


// Moving bike

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake(); 
