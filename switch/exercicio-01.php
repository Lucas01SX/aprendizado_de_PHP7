<?php

$diaDaSemana = 8; //date("w");

// echo $diaDaSemana;

switch ($diaDaSemana) {

    case "0":
        echo "Domingo";
    break;

    case 1:
        echo "Segunda-feira";
    break;

    case 2:
        echo "Terça-feira";
    break;

    case 3:
        echo "Quarta-feira";
    break;

    case 4:
        echo "Quinta-feira";
    break;

    case 5:
        echo "Sexta-feira";
    break;

    case 6:
        echo "Sábado";
    break;

    default:
    echo "Data inválida!";
    break;

}

/* Switch é utilizado para objetos específicos, nos casos onde sabemos o que precisa retornar a depender da variável,
como por exemplo me retornar "a" quando eu disser "a", case é utilizado para definir o valor e/ou variável,
break é freiar o código, parar, a partir do momento que ele lê aquela sintaxe ele para e vai para a outra ou
retorna o valor desejado */

/* default é utilizado como informação padrão, nesse caso, caso o código não encontre em nenhum case
a informação que busca, ele não retorna nada, com o valor padrão ele irá mostrar o valor padrão ao invés de
nada */


?>