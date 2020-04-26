
AULA ESCOPO DA VARIAVEL

<?php

$nome = "Joy";

function teste() {

	global $nome;//a variavel nome esta em outro escopo, por isso tem que torná-la global
	echo $nome;
}

function teste2() {

	$nome = "João"; //outro escopo (um não interfere no outro)
	echo "<br>";
	echo $nome . " agora no na segunda função: teste2";
}

teste();
teste2();
echo $nome . "mostrando $nome fora das funcões";

?>

