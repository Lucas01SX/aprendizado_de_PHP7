<?php

$condicao = true;

while ($condicao) {

    $numero = rand(1, 10);

    if ($numero === 3) {

        echo "TRÊS!!!";
        $condicao = false;

    }

    echo $numero . " ";

};

?>

/* contador; utilizar um contador que irá limitar as informações ou poderá gerar um loop infinito