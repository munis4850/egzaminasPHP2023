<?php

//1.  Grąžinkite visų lyginių skaičių, esančių $numbers masyve, sumą (1 balas)
   $numbers = [
       15,
       55,
       66,
       91,
       100,
       995,
       17,
       550,
   ];


function sumaLyginiu(array $numbers): int
{
    $sum = 0;
    foreach ($numbers as $num){
        if($num % 2 === 0){
            $suma += $num; // galima ir taip $sum = $sum + $num; panaudojau perspektyvesni buda
        }
    }
    return $suma;
};
var_dump(sumaLyginiu($numbers));