<?php

$a = 55.0;
$b = 55;
$c = 10;

echo " a = ".$a;
echo "<br>";
echo " b = ".$b;
echo "<br>";
echo " c = ".$c;
echo "<br>";
echo "<br>";

//Retorna falso ou verdadeiro
echo " a é menor que b? ".var_dump($a > $b);
echo "<br>";

echo " a é maior que b? ".var_dump($a < $b);
echo "<br>";
 
echo " o valor de a é igual ao valor de b? ".var_dump($a == $b);
echo "<br>";

echo " o valor e o tipo de a é igual ao valor e o tipo de b? ".var_dump($a === $b);
echo "<br>";

echo " o valor de a é diferente ao valor de b? ".var_dump($a != $b);;
echo "<br>";

echo " o valor e o tipo de a é diferente ao valor e o tipo de b? ".var_dump($a !== $b);
echo "<br>";

echo " a é maior que c E b é menor que c ? ".var_dump($a > $c && $b < $c); //As 2 condições tem que ser vredadeiras
echo "<br>";

echo " a é maior que c OU b é menor que c ? ".var_dump($a > $c || $b < $c); // uma ou outra consição tem que ser verdadeira
echo "<br>";





?>