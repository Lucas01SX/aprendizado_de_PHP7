<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad -> setNome("Djalma Sindeaux");
$cad -> setEmail("djalma@hacode.com.br");
$cad -> setSenha("123456");

//echo $cad;

$cad -> registrarVenda();

// namespace é utilizada para organizar as coisas, a classe cadastro que está raiz ou na class é uma pasta genérica,

// mas a classe cadastro que esta dentro da pasta cliente é exclusiva ou direcionada ao cadastro do cliente,

// só que o cadastro do cliente compartilha os dados do cadstro raiz, assim cria um padrão de objetos

?>