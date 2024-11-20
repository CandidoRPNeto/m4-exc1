<?php
// Crie um programa que receba os comprimentos dos lados de um triângulo do usuário e classifique-o como triângulo equilátero, isósceles ou escaleno. O programa deve imprimir na tela a classificação do triângulo.

function typOfTriangle(int $l1, int $l2, int $l3){
    echo "Os lados do triangulo são " . $l1 . ", " . $l2 . " e " . $l3 . ". ";
    if ($l1 === $l2 && $l2 === $l3)
        echo "Esse triangulo é equilatero";
    elseif ($l1 === $l2 || $l2 === $l3 || $l1 === $l3) 
        echo "Esse triangulo é isósceles";
    else
        echo "Esse triangulo é escaleno";
    echo "</br>";
}

echo "Q 7:</br>";
typOfTriangle(25, 12, 13);
typOfTriangle(25, 13, 13);
typOfTriangle(13, 13, 13);
echo "</br></br></br>";