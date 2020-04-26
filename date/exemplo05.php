<?php

$dt = new DateTime();

$periodo = new DateInterval("P4M"); //P15D soma 4 meses a data
//$periodo = new DateInterval("P2Y"); //P15D soma 2 anos a data
//$periodo = new DateInterval("P15D"); //P15D soma 15 dias a data

echo $dt -> format("d/m/Y H:i:s");
echo "<br>";

$dt -> add($periodo);

echo $dt -> format("d/m/Y H:i:s");