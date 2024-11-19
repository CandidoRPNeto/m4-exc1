<?php
// Elabore um programa que solicite ao usuário seu peso e altura e, em seguida, calcule e exiba na tela o seu Índice de Massa Corporal (IMC). Utilize as seguintes faixas para classificar o IMC:

//     Abaixo de 18,5: Magreza
//     Entre 18,5 e 24,9: Peso normal
//     Entre 25 e 29,9: Sobrepeso
//     Acima de 30: Obesidade

function cauculateIMC(float $size_in_kg, int $height_in_cm) {
    $imc = $size_in_kg / pow($height_in_cm/100,2);
    echo "IMC =  ". $imc . "</br>";
    switch ($imc) {
        case $imc < 18.5: echo "Abaixo de 18,5: Magreza"; break;
        case $imc < 25: echo "Entre 18,5 e 24,9: Peso normal"; break;
        case $imc < 30: echo "Entre 25 e 29,9: Sobrepeso"; break;
        default: echo "Acima de 30: Obesidade"; break;
    }
}

echo "Q 4:</br>";
cauculateIMC(98.5, 186);
echo "</br></br></br>";