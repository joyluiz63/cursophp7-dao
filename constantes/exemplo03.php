<?php

// Consultar https://www.php.net/manual/pt_BR/reserved.constants.php 
// Para ver as constantes pre definidas

echo PHP_VERSION; //Mostra a versão do PHP instalada

echo "<br>";

echo DIRECTORY_SEPARATOR; //Mostra o tipoo de barra, / ou \ utilizada para separa os diretórios

echo "<br>";

echo DEFAULT_INCLUDE_PATH;

echo "<br>";

//FUNÇÃO GET BROWSER

echo $_SERVER['HTTP_USER_AGENT'] . "<hr />\n";
/* $browser = get_browser();
foreach ($browser as $name => $value) {
    echo "<b>$name</b> $value <br />\n";
}
?> 
*/