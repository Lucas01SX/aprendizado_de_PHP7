<?php

$conn = new PDO ("mysql:host=localhost; dbname=dbphp7", "root", "");

$conn -> beginTransaction(); // utilizado para iniciar a transação 

$stmt = $conn -> prepare("DELETE FROM tb_usuarios  WHERE idusuario = ?"); // interrogação serve para utilizar o array

$id = 2;

$stmt -> execute(array($id)); // com array para a variável, se tiver mais de uma, tem que ter mais de um "?"

//$conn -> rollBack(); // utilizado para cancelar a transação 

$conn -> commit(); //agora para confirmar a transação

echo "Feito certo!!";

?>