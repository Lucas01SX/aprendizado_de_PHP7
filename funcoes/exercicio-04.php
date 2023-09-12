<?php

function ola() {

    $argumantos = func_get_args();
 
    return $argumantos;

}

var_dump(ola("bom dia", 10));

?>