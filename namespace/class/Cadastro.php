<?php

class Cadastro {

    private $nome;
    private $email;
    private $senha;

    // Criando os Gets
    //-------------------------------------------------------------------------------------------

    public function getNome(): string
    {
        return $this -> nome;
    }
    public function getEmail(): string
    {
        return $this -> email;
    }
    public function getSenha(): string
    {
        return $this -> senha;
    }


    // Criando os Sets
    //-------------------------------------------------------------------------------------------

    public function setNome($nome)
    {
        $this -> nome = $nome;
    }
    public function setEmail($email)
    {
        $this -> email = $email;
    }
    public function setSenha($senha)
    {
        $this -> senha = $senha;
    }

    // Criando o json
    //-------------------------------------------------------------------------------------------

    public function __toString(){

        return json_encode(array (

            "nome" => $this -> getNome(),
            "email" => $this -> getEmail(),
            "senha" => $this -> getSenha()
        ));

    }

}

?>