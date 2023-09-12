<?php


//for ($i = 0; $i < 10; $i ++ ) {

/* for ($i = 0; $i <= 10; $i ++ ) {

    echo $i . "<br>";


}
*/

/* 

primeira parte é o valor inicial, a variável $i poderá ser qualquer coisa (é um contador);

o primeiro ponto e vírgula ";" significa até, logo, até $i igual a 10, condição final do for;

depois do segundo ponto e vírgula é a quantidade a ser contada, de quanto em quanto;

*/

// abaixo contando de 5 em 5 até 1000;


/* for ($i = 0; $i <= 1000; $i += 5 ) {

    echo $i . "<br>";

}

*/

//usando o if para pular alguns números, no exemplo abaixo, pular os números entre 200 e 800;

for ($i = 0; $i <= 1000; $i += 5 ) {

    if ($i > 200 && $i < 800 ) continue;

    if ($i === 900 ) break; // chegou no 895 e parou o código

    echo $i . "<br>";

}


?>