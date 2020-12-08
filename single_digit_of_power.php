<?php
$flag = false;
while($flag===false)
{
    $case = readline("Number of cases: ");

    if(in_array($case, range(1, 30))){
        $flag = true;
    }
}
$flag = false;
for ($i=0; $i<$case; $i++){

    $base[$i] = readline(sprintf("%u. Base: ", $i+1));
    $exponent[$i] = readline(sprintf("%u. Power: ", $i+1));

    if(!in_array($base[$i], range(1, 1000000)) && !in_array($exponent[$i], range(1, 1000000))){
        echo "Number is not between 1 and 1 000 000";
        break;
    }
}

for ($i=0; $i<$case; $i++){
    $power = (string)pow($base[$i], $exponent[$i]);
    echo $i+1 . '. ' . $power[strlen($power)-1] . PHP_EOL;
}

