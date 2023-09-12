<?php

class Pessoa {

    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados(){

        echo $this -> nome . "<br/>";

        echo $this -> idade . "<br/>"; 
        
        echo $this -> senha . "<br/>"; 

    }

}

$objeto = new Pessoa ();

/* 

// echo $objeto -> nome . "<br/>";

// echo $objeto -> idade . "<br/>";

// echo $objeto -> senha . "<br/>";

Nem todos esses echos selecionados acima trarão os resultados esperados, pois o public é possível acessar de fora,
o protected não é possível acessar de fora, mas pode ser acessado por seus filhos, ou subclasses,
o private não é possível acessar a não ser que esteja no mesmo local ou atributo
*/

$objeto -> verDados();

/*

devido a função lá em cima ser public foi possível acessar chamado a classe pelo método acima;
atributos e métodos da mesma classe, das classes estendidas, ou filhas, ou acessadas pelo objeto;

quando é publico todo mundo vê;

protegido, na mesma classe e subdivisões, filhos, herança, classe estendida;

privada só na mesma classe;


*/

?>