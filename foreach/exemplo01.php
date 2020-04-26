<?php

/* EXEMPLO THIAGO
$a = [1, 2, 3, 4, 5];

echo array_reduce($a, function ($acc, $num){
	return $acc + $num;
}, 0); */

$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho",
				"Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");


foreach ($meses as $index => $mes) {
	
echo "indice: ".$index."<br>";
	echo "O mês é: ". $mes. "<br><br>";
}

?>