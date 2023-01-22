<?php

/*
4. Pakoreguokite 3 užduotį taip, kad ji duomenis rašytų ne į terminalą, o spausdintų į failą. (1.5 balas)
 */

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
    $encodedData = json_encode($newRoutes);
    file_put_contents('routes.json', $encodedData );

}
myList($holidays);