<?php

session_start();

// session_unset(); limpa variáveis de seção, mas você para aquele site continua sendo a mesma pessoa;

echo $_SESSION["nome"];

// session_destroy(); como o próprio nome já diz, "explode" você do site, limpa as variáveis e remove o acesso;

?>