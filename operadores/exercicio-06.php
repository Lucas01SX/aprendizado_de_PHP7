<?php

$a = null;

// $b = null;
$b = 8;

$c = 10;

echo $a ?? $b ?? $c;

/* - Nesse exemplo, ocorrerá a situação de que, quando a variável for nula será retornado o valor diferente de nulo, 
ou seja $c = 10;
- Será ignorado a variável "a" e "b" por serem nulas;
- E não ocorrerá o erro informando que a variável não foi definida, nesse caso é mostrado o valor após o valor nulo,
imediatamente subsequente, então se trocar a variável $b para um número, o echo irá até o b e parará, não indo até,
o $c;

*/

?>