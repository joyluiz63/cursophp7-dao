<?php

//w+ O ponteiro e´colocado no incio e apaga o conteudo escrevendo um novo
//$file = fopen("log.txt", "w+"); 

//a+ O ponteiro e´colocado no final e adiciona ao conteudo já existente
$file = fopen("log.txt", "a+"); 

fwrite($file, date("Y-m-d H:i:s". "\r\n"));

fclose($file);

echo "Arquivo criado com susesso!";