<?php


/////////////////// 

///////// conectando ao sql server


/* $conn = new PDO ("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", 
"DESKTOP-HB6MDGI (DESKTOP-HB6MDGI\lukas)", " ");

$stmt = $conn -> prepare ("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt -> execute();

$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {

    foreach ($row as $key => $value) {

        echo "<strong>" . $key . ":</strong>" . $value . "<br/>";

    }

    echo "=================================================== <br>";

}

// var_dump($results);

//não deu certo//
?>
*/

// vamos ver se vai dar certo com o código novo abaixo 



//<?php 

$serverName = "DESKTOP-HB6MDGI";
try
{
$db = new PDO ("sqlsrv:server=$serverName;
    Database=dbphp7", "", "");
echo "Conectado com sucesso!";
$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}

catch(Exception $e)
{
    die (print_r($e -> getMessage() ));
}


// deu certo irrrrrrrrrrrrrrrrrrrrrrrrrrrrruuuuuuuuu


?>