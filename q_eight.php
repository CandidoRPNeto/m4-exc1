<?php
// Desenvolva um programa que permita ao usuário converter uma temperatura de Celsius para Fahrenheit e vice-versa. O programa deve solicitar ao usuário a temperatura a ser convertida e a unidade de origem (Celsius ou Fahrenheit) e, em seguida, imprimir na tela a temperatura convertida na unidade desejada.

function convertTemperature(string $type, float $value){
    switch ($type){
        case "Celsius": convertCelsius($value); break;
        case "Fahrenheit": convertFahrenheit($value); break;
        default: echo "Type not supported"; break;
    }
    echo "</br>";
}

function convertCelsius(float $value){
    echo $value * 1.8 + 32;
}

function convertFahrenheit( float $value){
    echo ($value - 32)/ 1.8;
}

echo "Q 8:</br>";
echo "Convert 38,7 C to Fahrenheit: ";
convertTemperature("Fahrenheit", 38.7);
echo "Convert 200 F to Celsius: ";
convertTemperature("Celsius", 200.0);
echo "</br></br></br>";