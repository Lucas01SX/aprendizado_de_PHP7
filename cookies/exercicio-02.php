<?php

if (isset($_COOKIE["NOME_DO_COOKIE"])){

    //var_dump($_COOKIE["NOME_DO_COOKIE"]);

    //var_dump(json_decode($_COOKIE["NOME_DO_COOKIE"], true));

    //var_dump(json_decode($_COOKIE["NOME_DO_COOKIE"])); -> coloca o objeto em uma classe padrão

    $obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);

    echo $obj -> empresa;

}


?>