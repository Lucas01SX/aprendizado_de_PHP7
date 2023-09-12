<?php

$a = 10;

function trocaValor($a) { // parâmetro da função não é variável, com isso, o que acontece na função fica na função,
/* passagem de parâmetro por valor*/
    $a += 50;

    return $a;

}

echo trocaValor($a);

echo "<br>";

echo $a;


?>