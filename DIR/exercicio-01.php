<?php

$name = "images";

if (!is_dir($name)) {

    mkdir($name); // essa informação mkdir irá criar um criar um novo diretório se ele não existir

    echo "Diretório $name criado com sucesso!";

} else {

    rmdir($name); // rmdir irá excluir um diretório se ele já existir 

    echo "Já existe o diretório: $name, foi removido!";

}



?>