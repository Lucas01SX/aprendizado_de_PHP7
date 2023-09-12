<?php

$file = fopen("teste.txt", "w+"); // gera um arquivo no diretório se não existir

fclose($file);

//unlink($file); -> aponta para o arquivo criado mas não o exclui

unlink("teste.txt"); // apaga o arquivo gerado no diretório

echo "Arquivo removido com sucesso!!!!";

?>