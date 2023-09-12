<?php

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

// $q = strpos($frase, "mãe");
$q = strpos($frase, $palavra);

/* a função strpos, localiza algo em uma determinada variável string, assim que localizada retorna o indice desta,
nesse caso primeiro passamos a variável que desejamos buscar a informação e em seguida a informação,
com o var_dump abaixo, nos retorna o indice.
*/


$texto = substr($frase, 0, $q);

/** A função substr, passamos primeiro a variável onde a informação está contida,
 * depois onde inicia o trecho desejado,
 * depois onde ele termina,
 * com isso nos retornará apenas o que estiver entre o inicio e onde informamos que termina;
 * 
 */

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

/* strlen é para contar e retornar ou "printar" as as strings
se quiser que a palavra mãe vá junto no segundo indice é só $q, se quer que ela não e vá e comece depois dela,
continuar igual o código;

*/

echo "<br>";


var_dump($texto2);

?>