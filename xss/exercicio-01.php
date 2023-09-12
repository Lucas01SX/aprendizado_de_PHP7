<form method="post">

    <input type="text" name="busca">
    <button type="submit">Enviar</button>

</form>

<?php

/*

Uma das maneiras de dificultar a invasão hacker xss, é utilizar uma das funções abaixo,
ou strip_tags que irá inibir a usabilidade de tags,
ou o htmlentities que irá inserir caracteres especiais nas tags tirando a sua usabilidade

*/
$_POST['busca'] = '<a href="#"><strong>Moca</strong></a><script>alert("ok")</script>';

if (isset($_POST['busca'])) {

    //echo strip_tags($_POST['busca'], "<strong><a>");
    echo htmlentities($_POST['busca']);

}


?>