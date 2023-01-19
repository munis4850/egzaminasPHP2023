<?php

//6. Parašykite programą, kuri per argumentų padavimą terminale paleidžiant funkciją
// juos priimtų ir juos sudaugintų tarpusavyje ir pakeltu kvadratu. Atkreipkite dėmesį,
// kad jeigu argumentas yra paduodamas ne skaičius, reikia, kad terminale gautumėme atitinkamą
// klaidos kodą ir pranešimą. (2 balai)

function multiply(){
    $arg1 = readline('first argument  ');
    $arg2 = readline('second argument  ');
    $multiply = $arg1 * $arg2;
    if($arg1=(int)$arg1 && $arg2=(int)$arg2) {

        echo "your result  " . pow($multiply,2);
    } else {
        echo 'error, arguments are not correct!';
    }
}
multiply();

