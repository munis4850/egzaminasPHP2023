<?php

//5. Parašykite programą, kuri Jūsų susigalvotus duomenis paimtų iš failo ir atspausdintų terminale. (1.5 balas)

$file = "data.txt";
$print = file_get_contents($file);
echo $print;

//mandresnis su json
//$printJson = file_get_contents("./data.json");
//$printJson = json_decode($printJson, true);
