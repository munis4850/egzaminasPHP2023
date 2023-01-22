<?php

//3.     Masyve $holidays turime kelionių agentūros siūlomas keliones su kaina ir dalyvių skaičiumi.
//Terminale išspausdinkite santrauką, kurioje matytusi miesto pavadinimas, kelionių pavadinimai ir dalyvių sumokėta suma
//      Dėmesio! Santraukoje nerodykite tų kelionių, kurių kaina yra null. (3 balai)
//
//      Destination "Paris".
//Titles: "Romantic Paris", "Hidden Paris"
//      Total: 99500
//************
//      Destination "New York"
//      ...

   $holidays = [
       [
           'title' => 'Romantic Paris',
           'destination' => 'Paris',
           'price' => 1500,
           'tourists' => 55,
       ],
       [
           'title' => 'Amazing New York',
           'destination' => 'New York',
           'price' => 2699,
           'tourists' => 21,
       ],
       [
           'title' => 'Spectacular Sydey',
           'destination' => 'Sydey',
           'price' => 4130,
           'tourists' => 9,
       ],
       [
           'title' => 'Hidden Paris',
           'destination' => 'Paris',
           'price' => 1700,
           'tourists' => 10,
       ],
       [
           'title' => 'Emperors of the past',
           'destination' => 'Beijing',
           'price' => null,
           'tourists' => 10,
       ],
   ];
function myList(array $array): void
{
    $newRoutes = [];
    foreach ($array as $route) {
        if (!isset($route['price'])) {
            continue;
        }
        $destination = $route['destination'];
        if (!isset($newRoutes[$destination])) {
            $newRoutes[$destination] = [
                'destination' => $destination,
                'titles' => [],
                'total' => 0,
            ];
        }
        $newRoutes[$destination]['titles'][] = $route['title'];
        $newRoutes[$destination]['total'] += $route['price'] * $route['tourists'];
    }
    foreach ($newRoutes as $newR) {
        echo 'Route destination: '.$newR['destination'].PHP_EOL;
        echo 'Name: ' . implode(', ', $newR['titles']).PHP_EOL;
        echo 'Total money spent: '.$newR['total'].PHP_EOL.PHP_EOL;
    }
}
myList($holidays);