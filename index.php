<?php

require_once 'Car.php';

$car = new Car('blue', 3, 'diesel');
$car->setParkBrake(true);

try {
    $car->start();
} catch (Exception $e) {
    if ($e->getMessage() === ('Car can\'t start with park brake')) {
        echo 'Park brake has been deactivated' . PHP_EOL;
        $car->setParkBrake(false);
    }
} finally {
    echo 'Ma voiture roule comme un donut';
}
