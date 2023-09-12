<?php

$conn = new PDO ("mysql:host=localhost; dbname=dbphp7", "root", "");

//$stmt = $conn -> prepare("INSERT INTO tb_usuarios (desligon, dessenha) VALUES ('user', 'gfdgs')");
// Não é muito utilizado o modelo acima, pois não auxilia e deixa o banco exposto a ataques hackers

$stmt = $conn -> prepare("INSERT INTO tb_usuarios (desligon, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "jose";
$password = "1234567890";

$stmt -> bindParam(":LOGIN", $login);
$stmt -> bindParam(":PASSWORD", $password);

$stmt -> execute();

echo "Inserido OK!";

?>