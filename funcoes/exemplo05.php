<?php 

$a = 10;

echo "PASSAGEM DE VALOR POR PARAMETRO (	no caso a variavel $a não muda)<br>";
function trocaValor($b){

$b = +50;
return $b;

}

echo trocaValor($a);
echo "<br>";
echo $a;

echo "<hr>";

echo "PASSAGEM DE VALOR POR REFERÊNCIA (neste caso a variavel $a muda)<br>";
function trocaValor2(&$b){

$b += 50;
return $b;

}

echo trocaValor2($a);
echo "<br>";
echo trocaValor2($a);
echo "<br>";
echo $a;
