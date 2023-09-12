<?php

interface Veiculo {

    public function acelerar ($velocidade);
    public function frenar ($velocidade);
    public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo {


    public function acelerar($velocidade) {

        echo "O veículo acelerou até " . $velocidade . " Km/h";

    }

    public function frenar ($velocidade) 
    {

        echo "O veículo frenou até " . $velocidade . " Km/h";

    }

    public function trocarMarcha($marcha)
    {
        echo "O veículo engatou a marcha " . $marcha;
    }

}

class DelRey extends Automovel {

    public function empurrar(){


    }

}

// $carro = new DelRey();

// $carro -> acelerar(200);

/* Classe abstrata não permite que instanciar diretamente, sem definir o que se necessita na classe*/ 


/* 
No exemplo abaixo já é apresentado erro no código, informando que não é possível instanciar a referida classe direto
é necessário a criação de outra classe para utilizar a classe abstrata automovel

$carro = new Automovel ();

$carro -> acelerar(200);



*/ 
?>
