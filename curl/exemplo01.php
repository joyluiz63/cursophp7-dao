<?php

$cep = "94035180";
//COPIADO DO SITE VIA CEP, FORMATO DE RETORNO JSON, URL
$link = "https://viacep.com.br/ws/$cep/json/"; 

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

print_r($data); //AQUI PODERIA USAR A CHAVE LOCALIDADE POR EXEMPLO