<?php
//Crie um programa que receba um número inteiro do usuário e verifique se ele é par ou ímpar. O programa deve imprimir na tela se o número é par ou ímpar.


function fibonacci(int $n){
    $first = 0;
    $last = 1; 
    for ($i=0; $i < $n; $i++) {
        echo "F" . $i . " = " . $first . "</br>";
        $last = $first + $last; 
        $first = $last - $first;
    }
}

echo "Q 6:</br>";
fibonacci(25);
echo "</br></br></br>";