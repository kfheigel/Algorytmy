<?php

// Input
// n - liczba testów n<100000, w kolejnych liniach n liczb z przedziału [1..10000]

// Output
// Dla każdej liczby słowo TAK, jeśli liczba ta jest pierwsza, słowo: NIE, w przeciwnym wypadku.

function generate(){
    for ($i = 1; $i <=100; $i++) {
        yield $i;
    }
}
$numbers = generate();
$flag = true;

foreach($numbers as $number){
    if($number === 1 || $number === 2){
        echo "TAK " . $number . PHP_EOL;
    }else {
        for ($i=$number-1; $i>1; $i--){
            if($number%$i===0){
                $flag = false;
                break;
            }
        }
        if($flag===false){
            echo " NIE " . $number . PHP_EOL;
        }else{
            echo " TAK " . $number . PHP_EOL;
        }
    }
    $flag = true;
}