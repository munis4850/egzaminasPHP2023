<?php

//2. Grąžinkite visų skaičių, esančių $numbers masyve, sandaugą (1 balas)

$numbers = [
    [1, 3, 5],
    [55, 87, 100],
    [12],
    [],
];

$sandauga = 1; //gal nelabai LT pavadinimai, bet man aisku pagal uzduoti :)
foreach($numbers as $newArray) {
    foreach($newArray as $number) {
        $sandauga*= $number;
    }
}
echo $sandauga;