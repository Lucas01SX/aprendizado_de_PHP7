<?php

$nome = "lucas dos santos";

// echo strtoupper($nome); // transforma tudo em maiúsculo;

$nome = strtoupper($nome); // converte tudo para maiúsculo;

echo $nome;

$nome = strtolower($nome); // converte tudo para minúsculo;

echo "<br>";

echo $nome;

echo "<br>";

echo ucwords($nome); //  a primeira letra de cada palavra fica maiúscula;

echo "<br>";

echo ucfirst($nome); // somente a primeira palavra da frase fica maiúscula;

?>
