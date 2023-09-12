<?php

$conn = new PDO ("mysql:host=localhost; dbname=dbphp7", "root", "");

//$stmt = $conn -> prepare("INSERT INTO tb_usuarios (desligon, dessenha) VALUES ('user', 'gfdgs')");
// Não é muito utilizado o modelo acima, pois não auxilia e deixa o banco exposto a ataques hackers

//$stmt = $conn -> prepare("UPDATE tb_usuarios SET desligon = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$stmt = $conn -> prepare("DELETE FROM tb_usuarios  WHERE idusuario = :ID");

// $login = "Lucas";
//$password = "Macasca";
//$id = 2;

$id = 1;


//$stmt -> bindParam(":LOGIN", $login);
//$stmt -> bindParam(":PASSWORD", $password);
$stmt -> bindParam(":ID", $id);


$stmt -> execute();

echo "Deletado com sucesso!!!!";

?>