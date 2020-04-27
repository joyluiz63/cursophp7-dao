<?php

//sobrescreve o padrao do Php em mostrar erros
error_reporting(E_ALL & ~E_NOTICE); //não vai mostrar notice (~ na frente)

$nome = $_GET["nome"];

echo $nome;