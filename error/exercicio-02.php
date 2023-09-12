<?php

error_reporting(E_ALL & ~E_WARNING); 

/* Nesse exercicio não temos alguma informação no $nome deifinida, se rodarmos somente o código debaixo,
irá retornar um Warning (aviso) no site, informando que não declaramos o $nome

se usarmos o error_reporting acima, ele não mostra o erro no site, por mais que tenha;

*/

$nome = $_GET["nome"];

echo $nome;

?>