<?php

// Escreva um programa que armazene o valor 10 em uma variável A e 20 em uma outra variável B. Utilize apenas atribuições entre variáveis para trocar seus conteúdos, fazendo com que o valor que está em A passe para B e vice-versa. Ao final, imprima os valores nas variáveis.

echo "Q 1:</br>";
$a = 10;
$b = 20;
echo "A = " . $a . " - B = " . $b;
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "</br>A = " . $a . " - B = " . $b;
echo "</br></br></br>";