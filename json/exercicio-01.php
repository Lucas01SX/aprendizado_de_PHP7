<?php


$pessoas = array();

array_push($pessoas, array (

    'nome' => 'João',
    'idade' => 20

));

array_push($pessoas, array (

    'nome' => 'Lucas',
    'idade' => 22

));

// print_r($pessoas);

//print_r($pessoas [0] ['nome']);

echo json_encode($pessoas);
?>