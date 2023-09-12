<?php

// include "exercicio-01.php";

// require "exercicio-01.php";
/* require "exercicio-01.php"; nesse caso não é permitido chamar o mesmo arquivo mais de uma vez nessas condições,
pois o sistema retorná um mas não irá duplicar a situação apresentando erro em sequência*/

/* DIFERENÇA DE INCLUDE E REQUIRE:

INCLUDE: Tenta funcionar mesmo que o arquivo não exista ou tenha algum tipo de problema,
o include também tem mais recursos;

include path, pasta padrão do include

* geralmente utilizado em desenvolvimento intranet* pois permitirá o compartilhamento de includes ou códigos,
em rede;

REQUIRE: Para que o require funcione é obrigatório que o arquivo exista e o arquivo esteja funcionando perfeitamente,
do contrário o require gera um erro fatal, ele para a execução do código;

se não se enquadrar no caso acima, indicado usar o require;
*/

require_once "exercicio-01.php";
require_once "exercicio-01.php"; /* nesse caso em específico, por ter a informação _once, não acontecerá o erro
informando dupliciade, também não ocorrerá a duplicidade, pois esta situação determina que o arquivo seja
chamado apenas uma vez, e caso ocorra uma segunda vez, será ignorado permanecendo apenas uma; */


$resultado = somar (10, 25);

echo $resultado;

?>