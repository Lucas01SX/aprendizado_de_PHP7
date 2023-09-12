<?php

$a = 10;

function trocaValor(&$a) { 

/* quando tem um & na função é uma passagem de parâmetro por referência,
nesse caso altera a varável*/

    $a += 50;

    return $a;

}

echo trocaValor($a);

echo "<br>";

echo $a;

echo trocaValor($a);

echo "<br>";

echo $a;

?>