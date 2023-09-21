<?php

function esMayorDeEdad($nombre, $edad): string
{
    return $edad >= 18 ? "$nombre tiene $edad años y es mayor de edad" : "$nombre tiene $edad años y es menor de edad";
}

function esParOImpar($num): string
{
    return $num % 2 == 0 ? "PAR" : "IMPAR";
}

function maxDeTres($num1, $num2, $num3): int
{
    $numMax = $num3;
    if ($num1 > $num2 && $num1 > $num3) {
        $numMax = $num1;
    } else if ($num2 > $num1 && $num2 > $num3) {
        $numMax = $num2;
    }

    return $numMax;
}

function factorial($num)
{
    if ($num == 0) {
        return 1;
    }

    if ($num < 0) {
        return false;
    }

    $factorial = $num;
    for ($i = $num - 1; $i > 0; $i--) {

        $factorial *= $i;
    }
    return $factorial;
}
function maxDeArray($array) {
    $maxNum = $array[0];

    foreach ($array as $number) {
        if ($number > $maxNum) {
            $maxNum = $number;
        }
    }
    return $maxNum;
}

echo esMayorDeEdad("Pepe", 42);
echo "<br>";
echo esParOImpar(42);
echo "<br>";
echo maxDeTres(14, 75, 3);
echo "<br>";
echo factorial(5);
echo "<br>";

$numeros=[1,3,4,12,7,34,22,45,2,4,99,35, 21,55,76,29,83,22, 33];
echo maxDeArray($numeros);

