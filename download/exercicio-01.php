<?php

$link = "https://www.google.com/url?sa=i&url=https%3A%2F%2Ftntsports.com.br%2Fmelhorfuteboldomundo%2FDestino-de-Cristiano-Ronaldo-sera-o-Al-Nassr-revela-jornal-20221222-0004.html&psig=AOvVaw0s2dJOvbVQU9YKszGDg7jP&ust=1693966857869000&source=images&cd=vfe&opi=89978449&ved=0CBAQjRxqFwoTCLi697G0koEDFQAAAAAdAAAAABAR";

$content = file_get_contents($link);

//var_dump($content);

// $parse = parse_url($content);

$parse = parse_url($link);

// var_dump($parse);

//var_dump(basename($parse["path"]));

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>">