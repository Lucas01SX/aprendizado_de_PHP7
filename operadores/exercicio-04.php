<?php

//$a = 30;

//$a = 55;

$a = 55.0;

$b = 55;

var_dump($a > $b);

echo "<br>";

var_dump($a < $b);

echo "<br>";

// var_dump($a = $b); // nessa condição é realizada atribuição, logo a variável a que valia 30, agora vale 55 o mesmo que
                    // a variável b, pois um sinal de igual (=), atribui e não compara;

// echo "<br>";

// var_dump($a == $b); // agora é realizada a comparação e esse sinal é comparação de valor e não de tipo;

// echo "<br>";

var_dump($a === $b); // operador de igualdade de identidade (valor + tipo) e não igualdade apenas de valor;

echo "<br>";

var_dump($a != $b); // retorna se o valor é diferente, ou seja se o valor realmente for diferente, true ou ver,
// se o valor não for diferente false ou falso;

echo "<br>";

var_dump($a !== $b); // retorna se a identidade (valor + tipo) for igual false, se não for igual true;

?>