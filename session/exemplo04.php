<?php 

require_once("config.php");

session_regenerate_id(); // recomendavel usar este comando no login para evitar frades

echo session_id();

var_dump($_SESSION);
