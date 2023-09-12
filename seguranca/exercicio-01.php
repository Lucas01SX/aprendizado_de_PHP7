<?php

if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    //$cmd = $_POST["cmd"]; // possibilita a invasão hack por receber dados dinâmicos sem o tratamento

    $cmd = escapeshellcmd($_POST["cmd"]); // reduz a possibilidade de ataques por alterar o comando digitadoude

    var_dump($cmd);

    echo "<pre>";

    //$comando = system("dir C:", $retorno);

    $comando = system($cmd, $retorno);

    echo "</pre>";


}
?>

<form method="post">

    <input type="text" name="cmd">
    <button type="submit">Enviar</button>

</form>