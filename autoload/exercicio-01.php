<?php

/* function __autoload($nomeClasse)

// function spl_autoload_register($nomeClasse)

{

    var_dump($nomeClasse);
    require_once("$nomeClasse.php");

    // 
}


$carro = new DelRey();

$carro -> acelerar(80);


// não deu certo ksksskksk

*/
/* exemplo que deu certo, mudei para outra abaixo
spl_autoload_register(function($class){

    if (file_exists($class . ".php")) {
    
    require_once($class.".php");
    
    }
    
});
*/

spl_autoload_register(function($nomeClasse){

    if (file_exists($nomeClasse . ".php")) {
    
    require_once($nomeClasse.".php");
    
    }
    
});

$carro = new DelRey();

$carro -> acelerar(80);

// Agora deu certo, a função __autoload não está mais rodando, nesse caso tem de ser pela spl 

//usei nesse caso somente com as outras funções na mesma pasta, exercicio-02 em outras pastas

?>
