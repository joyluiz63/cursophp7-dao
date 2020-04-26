<?php

$nome = (int)$_GET["a"];// colocando o (int) voce converte em inteiro a variavel, senão será string

//var_dump($nome);

//$ip = $_SERVER["REMOTE_ADDR"]; //captura o endereço de ip do usuário

$ip = $_SERVER["SCRIPT_NAME"]; //captura o patch do arquivo. neste caso mostra: /variaveis/exemplo04.php

echo $ip;


?>