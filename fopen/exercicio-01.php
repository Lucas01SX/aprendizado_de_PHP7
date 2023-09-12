<?php

//$file = fopen("log.txt", "w+"); w+ irá criar se não existir e não vai ficar adicionando

$file = fopen("log.txt", "a+"); // a+ para adicionar 

//fwrite($file, date("Y-m-d H:i:s")); // função simples para adicionar a data no doc .txt

fwrite($file, date("Y-m-d H:i:s")."\r\n"); // quebra a linha para cada novo "F5";

fclose($file);

echo "Arquivo criado com sucesso!";

?>