<?php

function soma(float...$valores): float {

	return array_sum($valores);

} 

echo soma(2,2);
echo "<br>";
echo soma(25,33);
echo "<br>";
echo soma(1.5,3.2); // como o parametro esperado é int, a soma exibida será 4
echo "<br>";
