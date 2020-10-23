<?php

require 'Vehicle.php';
require 'HighWay.php';

$MotorWay = new MotorWay(4, 130);
$PedestrianWay = new PedestrianWay(1, 10);
$ResidentialWay = new ResidentialWay(2, 50);

$Car = new Car('red', 2, 1);
$Bike = new Bike ('blue', 3, 1);
$SkateBoard = new Skateboard('black', 4, 3);

echo "1)";
$MotorWay->addVehicle($Car)."<br/>";
echo "2)";
$MotorWay->addVehicle($Bike)."<br/>";
echo "3)";
$MotorWay->addVehicle($SkateBoard)."<br/>";

echo "4)";
$PedestrianWay->addVehicle($Car)."<br/>";
echo "5)";
$PedestrianWay->addVehicle($Bike)."<br/>";
echo "6)";
$PedestrianWay->addVehicle($SkateBoard)."<br/>";

echo "7)";
$ResidentialWay->addVehicle($Car)."<br/>";
echo "8)";
$ResidentialWay->addVehicle($Bike)."<br/>";
echo "9)";
$ResidentialWay->addVehicle($SkateBoard)."<br/>";


try
{
    $Car->start(false);
}
catch (Exception $e)
{
    echo "Exception received : " . $e->getmessage();
}
