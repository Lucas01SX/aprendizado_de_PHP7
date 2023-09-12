<?php


class Usuario {

    private $idusuario;
    private $desligon;
    private $dessenha;
    private $dtcadastro;
    
    public function getIdusuario(){
        return $this -> idusuario;
    }

    public function setIdusuario($value){
        $this -> idusuario = $value;
    }
    public function getDesligon(){
        return $this -> desligon;
    }

    public function setDesligon($value){
        $this -> desligon = $value;
    }
    public function getDessenha(){
        return $this -> dessenha;
    }

    public function setDessenha($value){
        $this -> dessenha = $value;
    }
    public function getDtcadastro(){
        return $this -> dtcadastro;
    }

    public function setDtcadastro($value){
        $this -> dtcadastro = $value;
    }

    public function loadById($id){

        $sql = new Sql();

        $results = $sql -> select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(

            ":ID"=>$id
        ));

        // if (isset($results[0])); // pode ser feito com isset ou com count

        if (count($results) >0) {

            $row = $results[0];

            $this -> setIdusuario($row['idusuario']);
            $this -> setDesligon($row['desligon']);
            $this -> setDessenha($row['dessenha']);
            $this -> setDtcadastro(new DateTime($row['dtcadastro']));

        }

    }

/* 
------------------------------------------------------------------------------------------------------------------
Abaixo a aula 3 de DAO
*/
    public static function getList(){

        $sql = new Sql();

        return $sql -> select("SELECT * FROM tb_usuarios ORDER BY desligon;");

    }

    public static function search($login){

        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios WHERE desligon LIKE :SEARCH ORDER BY desligon", array( 

            ':SEARCH' => "%". $login ."%"

        ));
    }

    public function login($login, $password) {

        $sql = new Sql();

        $results = $sql -> select("SELECT * FROM tb_usuarios WHERE desligon = :LOGIN AND dessenha = :PASSWORD", array(

            ":LOGIN" => $login,
            ":PASSWORD" => $password
            
        ));

        if (count($results) >0) {

            /*
            --------------------------------------------------------------------------------------
            $row = $results[0];

            $this -> setIdusuario($row['idusuario']);
            $this -> setDesligon($row['desligon']);
            $this -> setDessenha($row['dessenha']);
            $this -> setDtcadastro(new DateTime($row['dtcadastro']));
            Comentário realizado na aula 4 de DAO, $this abaixo, inserido na aula 4
            --------------------------------------------------------------------------------------
            */

            $this -> setData($results[0]);

        } else {

            throw new Exception ("Login e/ou senha inválidos");

        }

    }

/*
Acima a aula 3 de DAO
------------------------------------------------------------------------------------------------------------------
*/

/*
Abaixo a aula 4 de DAO
------------------------------------------------------------------------------------------------------------------
*/

    public function setData($data){

        $this -> setIdusuario($data['idusuario']);
        $this -> setDesligon($data['desligon']);
        $this -> setDessenha($data['dessenha']);
        $this -> setDtcadastro(new DateTime($data['dtcadastro']));

    }

    public function insert(){

        $sql = new Sql();

        $results = $sql -> select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(

            // Call é utilizado para executar no mysql, se for o sql server, tem que ser o execute

            ":LOGIN" => $this -> getDesligon(),
            ":PASSWORD" => $this -> getDessenha()

        ));

        if (count($results) > 0) {

            $this -> setData($results[0]);

        }

    }

    public function __construct($login = "", $password = ""){

        $this -> setDesligon($login);
        $this -> setDessenha($password);

    }

/*
Acima a aula 4 de DAO
------------------------------------------------------------------------------------------------------------------
*/

/*
------------------------------------------------------------------------------------------------------------------
Aula 6 de DAO
*/

    public function delete(){

        $sql = new Sql();

        $sql -> execQuery("DELETE FROM tb_usuarios WHERE idusuario = :ID", array(

            ":ID" => $this -> getIdusuario()

        ));

        $this -> setIdusuario(0);
        $this -> setDesligon("");
        $this -> setDessenha("");
        $this -> setDtcadastro(new DateTime());

    }


/*
------------------------------------------------------------------------------------------------------------------
*/

/*
Abaixo a aula 5 de DAO
------------------------------------------------------------------------------------------------------------------
*/

    public function update($login, $password){

        $this -> setDesligon($login);
        $this -> setDessenha($password);

        $sql = new Sql();

        $sql -> Execquery("UPDATE tb_usuarios SET desligon = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID", array(

            ":LOGIN" => $this -> getDesligon(),
            ":PASSWORD" => $this -> getDessenha(),
            ":ID" => $this -> getIdusuario() 

        ));

/*

Não se é mais utilizado a query, pois ela já está incluída dentro do PDO, isso gera erro na query, visto que
se tornou algo reservado e tem informações próprias a serem solicitadas,
utilizamos nesse caso o <<<<<<<<<< Execquery >>>>>>>>>>>>>>>>>;

*/

    }





/*
Acima a aula 5 de DAO
------------------------------------------------------------------------------------------------------------------
*/

    public function __toString() {

        return json_encode(array(
            "idusuario" => $this -> getIdusuario(),
            "desligon" => $this -> getDesligon(),
            "dessenha" => $this -> getDessenha(),
            "dtcadastro" => $this -> getDtcadastro() -> format("d/m/Y H:i:s")
        ));
    }
}


?>