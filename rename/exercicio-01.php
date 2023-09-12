<?php

// Nessa aula criamos dois diretórios o folder_01 e o forlder_02;

$dir1 = "folder_01";
$dir2 = "forlder_02";

if (!is_dir($dir1)) mkdir($dir1);

if(!is_dir($dir2)) mkdir($dir2);  

/* ! -> sinal de esclamação é negação, então nessa linha acima diz o seguinte, se(if) o diretório $dir1 ou $dir2,
não existir, o mkdir irá criar

*/

$filename = "README.txt";

if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)) {

    $file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");

    fwrite($file, date("Y-m-d H:i:s"));

    fclose($file);

}

// Incluímos um arquivo txt no $dir1

rename(
    $dir1 . DIRECTORY_SEPARATOR . $filename, // Origem (pasta origem onde está o documento)
    $dir2 . DIRECTORY_SEPARATOR . $filename // destino (pasta de destino do documento após o mover)
); 

// Alteramos o arquivo txt de diretório, renomeamos ele para outra pasta, $dir2

echo "Arquivo movido com sucesso!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!";

?>