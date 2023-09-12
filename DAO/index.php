<?php


require_once ("config.php");

/* 
--------------------------------------------------------------------------------------------------------
Aula 1 de DAO;

$sql = new Sql();

$usuarios = $sql -> select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

*/

/*

Aula 2 de DAO;

// Nessa aula aprendemos a usar melhor os atributos através da classe usuario;
// Carrega 1 usuário;

$root = new Usuario();

$root -> loadById(3);

echo $root;


--------------------------------------------------------------------------------------------------------
*/



/*

--------------------------------------------------------------------------------------------------------

Aula 3 de DAO;

// Carrega uma lista de usuários



$lista = Usuario::getList();

echo json_encode($lista);



// carrega uma lista de usuários buscando pelo ligon;

$search = Usuario::SEARCH("o");

echo json_encode($search);

*/

// Carrega um usuário usando o login e a senha;


/*
--------------------------------------------------------------------------------------------------------
$usuario = new Usuario();
$usuario -> login("Lucas", "1878844");

echo $usuario;

buscou informações válidas no banco e retornou o array normalmente 
--------------------------------------------------------------------------------------------------------


--------------------------------------------------------------------------------------------------------

$usuario = new Usuario();
$usuario -> login("Lucas", "187884411");

echo $usuario;

Dados inválidos na senha, informa que está errado

--------------------------------------------------------------------------------------------------------

*/

/*
--------------------------------------------------------------------------------------------------------
Aula 4 de DAO

// criando um novo usuário

$aluno = new Usuario();

$aluno -> setDesligon("aluno");
$aluno -> setDessenha("@lun0");

$aluno -> insert();

echo $aluno;


$aluno = new Usuario("Aluna", "@alun@@@");

$aluno -> insert();

echo $aluno;

--------------------------------------------------------------------------------------------------------
*/

/*
--------------------------------------------------------------------------------------------------------
Aula 4 de DAO

Alterar um usuário

$usuario = new Usuario();

$usuario -> loadById(7);

$usuario -> update("professor","minhdhashd");

echo $usuario;

--------------------------------------------------------------------------------------------------------
*/

/*
--------------------------------------------------------------------------------------------------------

Aula 5 de DAO

--------------------------------------------------------------------------------------------------------

Deletar um usuário

*/

$usuario = new Usuario ();

$usuario -> loadById(7);

$usuario -> delete();

echo $usuario;

?>