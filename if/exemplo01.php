<?php

$idade = 66;
$crianca = 12;
$adulto = 18;
$idoso= 65;

if ($idade < $crianca) {
	echo "criança"; 
} else if ($idade < $adulto){
	echo "Adolescente";
} else if ($idade < $idoso){
	echo "Adulto";
} else {
	echo "Melhor idade";
}

echo "<br>";
//exemplo de operador ternário
echo ($idade < $adulto) ? "Menor de idade" : "Maior de idade";

?>