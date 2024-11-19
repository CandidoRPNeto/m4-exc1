<?php
//Crie um programa que receba um número inteiro do usuário e verifique se ele é par ou ímpar. O programa deve imprimir na tela se o número é par ou ímpar.


function findNumberType(int $n){
    if($n % 2 !== 0)
        echo "ím";
    echo "par </br>";
}

echo "Q 5:</br>";
echo "O valor 2 é ";
findNumberType(2);
echo "O valor 3 é ";
findNumberType(3);
echo "</br></br></br>";