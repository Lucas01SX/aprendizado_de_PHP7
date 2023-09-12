<?php

/* $qualASuaIdade = 11; */

/* $qualASuaIdade = 15; */ 

/* $qualASuaIdade = 24; */

$qualASuaIdade = 115;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;


/* if ($qualASuaIdade < $idadeCrianca) {

    echo "Criança";

} else {

    echo "Não é criança";

} */


if ($qualASuaIdade < $idadeCrianca) {

    echo "Criança";

} else if ($qualASuaIdade < $idadeMaior) { // elseif ou else if, são semelhantes;

    echo "Adolecente";

} elseif ($qualASuaIdade < $idadeMelhor) {

    echo "Adulto";

}  else {

    echo "Idoso";

}

echo "<br>";

echo ($qualASuaIdade < $idadeMaior)? "Menor de idade":"Maior de idade"; /* ? significa então, os dois pontos ":",
seria a separação semelhante ao que ocorre no excel com ";" na função SE, aconselhavel usar quando houver uma validação
simples.

Um operador chamado Ternário;

*/

?>