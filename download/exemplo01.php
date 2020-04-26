<?php

$link = "https://www.google.com.br/logos/doodles/2020/thank-you-coronavirus-helpers-april-25-26-6753651837108777-law.gif";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>">
