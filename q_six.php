<?php
// Implemente um programa que gere e imprima na tela a sequência de Fibonacci até o n-ésimo termo, onde n é um valor inteiro positivo inserido pelo usuário. A sequência de Fibonacci é definida da seguinte maneira:

// F0 = 0
// F1 = 1
// Fn = Fn-1 + Fn-2, para n > 1

function fibonacci(int $n){
    $first = 0;
    $last = 1; 
    for ($i=0; $i <= $n; $i++) {
        echo "F" . $i . " = " . $first . "</br>";
        $last = $first + $last; 
        $first = $last - $first;
    }
}

echo "Q 6:</br>";
fibonacci(8);
echo "</br></br></br>";