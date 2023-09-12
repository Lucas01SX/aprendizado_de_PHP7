<?php

//function ola($texto = "mundo", $periodo = "Bom dia") {
function ola($texto, $periodo = "Bom dia") { // nesta função há dois parâmetros, um definido e outro não, atentar para

    return "Olá $texto! $periodo! <br> ";

}

// echo ola();

echo ola("mundo");

echo ola(" ", "Boa noite");

echo ola("Lucas", "Boa tarde");

echo ola("Silas", " ");



?>