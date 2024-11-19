<?php

//Desenvolva um programa que gere e imprima na tela a tabuada de multiplicação de um número inteiro positivo inserido pelo usuário. A tabuada deve ir de 1 a 10.

function multiplyNumbers(int $n, int $range = 10){
    for ($i=1; $i <= $range; $i++) {
        $result = $i * $n;
        echo $i . " X " . $n . " = " . $result . "</br>";
    }
}


echo "Q 3:</br>";
multiplyNumbers(8);
echo "</br></br></br>";