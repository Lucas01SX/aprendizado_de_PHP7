<?php

$email = $_POST["inputEmail"];

//var_dump($email);
//var_dump($_POST);
/*

Chaves de teste
chave cliente 6LdTTxYoAAAAAI4j0_CCjVaSAyLjsaSiUcm99fBl
chave secreta 6LdTTxYoAAAAAA-WGQYm930YrMaLiMX6XTTmHGDk

*/

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
    "secret" => "CODIGO_SECRET_DO_RECAPTCHA",
    "response" => $_POST["g-recaptcha-response"],
    "remoteip" => $_SERVER["REMOTE_ADDR"]
)));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$recaptcha = json_decode(curl_exec($ch), true);

curl_close($ch);

//var_dump($recaptcha);

if ($recaptcha["sucess"] === true) {

    echo "OK: " . $_POST["inputEmail"];

} else {

    header("Location: exercicio-04.php");

}

?>
