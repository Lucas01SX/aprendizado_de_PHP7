<?php

class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;


    public function __construct($a, $b, $c) {                        // chamado de método mágico

        $this -> logradouro = $a;

        $this -> numero = $b;

        $this -> cidade = $c;

    }

    public function __destruct() {

        // var_dump("DESTRUIR");

    }

    public function __toString() {

        return $this -> logradouro . ", " . $this -> numero . " u- " . $this -> cidade;

    }

}

$meuEndereco = new Endereco("Rua Cidade de Figueira", "25", "Curitiba");

// var_dump($meuEndereco);

// unset($meuEndereco);

echo $meuEndereco;

?>