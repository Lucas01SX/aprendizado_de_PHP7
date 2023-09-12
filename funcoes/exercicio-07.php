<?php

$pessoa = array (
    "nome" => "João",
    "idade" => 20
);

/* foreach ($pessoa as $value) {

    echo $value . "<br>";

}; */

foreach ($pessoa as &$value) { // altera o valor de ambos,  é fator do "&" e comercial dentro da função ou do foreach
// muda a função e muda a variável original, mas se tirar o e comercial, muda apenas dentro da função ou foreach

    if (gettype($value) === "integer") $value += 10;

    echo $value . "<br>";

};

print_r($pessoa);

?>