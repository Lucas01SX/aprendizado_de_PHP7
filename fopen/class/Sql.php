<?php

class Sql extends PDO {

    private $conn;


    public function __construct()
    {
        $this -> conn = new PDO ("mysql:host=localhost; dbname=dbphp7", "root", ""); 
        // nessa conexão com o banco, não utilizar espaçamento entre as informações primordiais,
        //apenas usar espaços após as vírgulas, pois, é entendido o espaçamento como uma condição do banco de dados
    }


    private function setParams($statment, $parameters = array()) {

        foreach ($parameters as $key => $value) {

            $this -> setParam($statment, $key, $value);

        }   
    }

    private function setParam($statment, $key, $value) {

        $statment -> bindParam ($key, $value);

    }

    //public function query($rawQuery , $params = array()) {
    public function execQuery($rawQuery , $params = array()) {

        $stmt = $this -> conn -> prepare($rawQuery);

        $this -> setParams($stmt, $params);

        $stmt -> execute();

        return $stmt;

    }

    public function select($rawQuery, $params = array()):array
    {
        $stmt = $this -> execQuery($rawQuery, $params);

        return $stmt -> fetchAll(PDO::FETCH_ASSOC);

    }

}

?>
