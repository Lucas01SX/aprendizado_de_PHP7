<?php


class Pessoa {

    /*

    --------------------------------------------------------------------------------------------------------
    --------------------------------------------------------------------------------------------------------

    Variáveis e funções == Atributos e métodos, dentro da programação orientada a objetos

    --------------------------------------------------------------------------------------------------------
    --------------------------------------------------------------------------------------------------------
    */

    public $nome; // criando um Atributo;

    /*

    --------------------------------------------------------------------------------------------------------
    --------------------------------------------------------------------------------------------------------

    Fora de um método, para chamar uma variável ou um atributo, sempre utilizar o "$" + o nome de variável;

    Agora, dentro de um método, sempre utiliza o "$this ->" + o nome da variável sem o cifrão "$", pois o 
    $this é uma variável interna do PHP que serve para referenciar a variável dentro de métodos;

    --------------------------------------------------------------------------------------------------------
    --------------------------------------------------------------------------------------------------------

    */
    public function falar() {

        return "O meu nome é " . $this-> nome;

    } // criando um Método, por que é uma função dentro de uma classe


}

$glaucio = new Pessoa();

$glaucio -> nome = "Glaucio Daniel";

echo $glaucio -> falar();
?>