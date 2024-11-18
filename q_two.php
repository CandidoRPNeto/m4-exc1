<?php

//Crie um programa que receba três notas de um aluno através da entrada e calcule a sua média. O programa deve imprimir a média na tela e informar se o aluno foi aprovado ou reprovado, considerando a média mínima para aprovação como 7.

echo "Q 2:</br>";
function media(int $n1, int $n2, int $n3){
    echo "Se suas notas foram ".$n1." , ".$n2." e ".$n3."</br>Você foi ";
    $m = ($n1 + $n2 + $n3)/3;
    if($m >= 7){ echo "Aprovado"; return; }
    echo "Reprovado";
}
media(10, 9, 8);
echo "</br>";
media(5, 4, 6);
echo "</br>";
echo "</br></br></br>";