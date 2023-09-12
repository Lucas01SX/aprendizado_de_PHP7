<?php

// $resultado = 10 + 3 / 2; // vai seguir a ordem lógica, multiplicação, divisão, etc.

// $resultado = (10 + 3) / 2; // irá realizar primeiro o que está dentro dos parênteses e depois o de fora;

/* $resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3; e comercial && duas vezes, se as duas condições forem verdadeiras, 
retorna verdadeiro, se não retorna falso */

/* $resultado = (10 + 3) / 2 > 5 && 10 + 5 < 20;  retorna verdadeiro pois as duas são verdade, 
se uma das duas for falsa nega tudo. */

/* || igual a or (ou); */ 

$resultado = (10 + 3) / 2 > 5 || 10 + 5 < 3; // retorna verdadeiro pois um deles é verdade;

//echo $resultado;

var_dump($resultado);

?>