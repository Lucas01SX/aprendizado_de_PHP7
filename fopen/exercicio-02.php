<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql -> select("SELECT * FROM tb_usuarios ORDER BY desligon");

//print_r($usuarios);

$headers = array();

foreach ($usuarios[0] as $key => $value) {

    array_push($headers, ucfirst($key));

}

//print_r($headers);

$file = fopen("usuarios.csv", "w+");

fwrite($file, implode(", ", $headers) . "\r\n");

/*

Foreach de linhas -> irá selecionar as linhas, primeira linha do banco, primeiro registro encontrado no banco,
etc.

Foreach de campos -> Irá mexer nos campos, alterar/ler/manipular os dados que o foreach de cima mostrar, ou seja,
as linhas que o primeiro foreach(de linhas) mostrar, será manipulado pelo segundo foreach(de campos);


*/
foreach($usuarios as $row){ // Este é o primeiro foreach que irá mexer nas linhas, nos registros 

    $data = array();

    foreach ($row as $key => $value){ // Este é o segundo foreach que irá mexer nos campos

        array_push($data, $value);

    }

    fwrite($file, implode(", ", $data) . "\r\n");

}

fclose($file);

// echo implode(", ", $headers);



?>