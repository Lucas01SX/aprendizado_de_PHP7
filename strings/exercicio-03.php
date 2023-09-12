<?php

$empresa = "Hcode";

$empresa = str_replace("o", "0", $empresa);

/** faz a troca das informações que desejamos, letra ou afins,
 * nesse exemplo trocamos a letra o da empresa para o número 0,
 * primeira informação da str_replace é o que queremos trocas, depois pelo que queremos trocar, depois onde esta
 * contida a informação que queremos trocar, variável ou demais.
 */

echo $empresa;

?>