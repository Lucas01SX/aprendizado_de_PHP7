<?php

session_id("Hcodeim7552ffoqv6ngr7rdu3kl0s15");

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>