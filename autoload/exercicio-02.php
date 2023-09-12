<?php


/* exemplo que deu certo, mudei para o outro depois
spl_autoload_register(function($class){

    if (file_exists("Abstratas" . DIRECTORY_SEPARATOR . $class . ".php")) {
    
    require_once("Abstratas" . DIRECTORY_SEPARATOR . $class.".php");
    
    }
    
});
*/ 

spl_autoload_register(function($nomeClasse){

    if (file_exists("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php")) {
    
    require_once("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php");
    
    }
    
});

$carro = new DelRey();

$carro -> acelerar(80);

?>