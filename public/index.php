<?php

namespace PavelDr\TripSorter;

require_once __DIR__ . '/../vendor/autoload.php';

use PavelDr\TripSorter\Cards\Train as TrainCard;
use PavelDr\TripSorter\Cards\Flight as FlightCard;
use PavelDr\TripSorter\Cards\AirportBus as AirportBusCard;
use PavelDr\TripSorter\Sorters\Main as MainSorter;

$sorter = new MainSorter();
$trip = new Trip($sorter);

$trainCard = new TrainCard('Madrid', 'Barcelona', '45B', '78A');
$flightCard1 = new FlightCard('Stockholm', 'New York JFK', '7B', 'SK22', '22');
$flightCard2 = new FlightCard('Gerona Airport', 'Stockholm', '3A', 'SK455', '45B', '344');
$airportBusCard = new AirportBusCard('Barcelona', 'Gerona Airport');


$trip->addCard($trainCard);
$trip->addCard($flightCard1);
$trip->addCard($flightCard2);
$trip->addCard($airportBusCard);

echo $trip->getRoute();
