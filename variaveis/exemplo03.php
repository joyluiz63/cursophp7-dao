<?php
//Tipos de variaveis - BASICOS
//STRING
$nome = "Joy";
$sobrenome = 'Silva';

//INTEIRO
$ANO = 2020;

//PONTO FLUTUANTE
$preco = 235.65;

//BOLEANO
$bloqueado = false;

////////////////////////////////////////////////////////////////
//Tipos de variaveis - COMPOSTOS
//ARRAY
$frutas = ["abacaxi", "laranja", "banana"];

echo $frutas[2];
echo "<br>";
echo $ANO;
echo "<br>";

//OBJETO
$nascimento = new DateTime();
//var_dump($nascimento);

//////////////////////////////////////////////////////////////////
//Tipos de variaveis - ESPECIAIS
//RESOURCE
$arquivo = fopen("exemplo04.php", "r");
//var_dump($arquivo);

//NULO
$nulo = NULL; // É diferente de vazio - nulo é ausencia de valor
$vazio = ""; // Vazio foi inciado, só não tem valor. Já reservou espaço na memória, a variavel existe


?>