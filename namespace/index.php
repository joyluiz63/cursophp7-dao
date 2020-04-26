<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();
$cad -> setNome("Joy Luiz Gomes da Silva");
$cad -> setEmail("joyluiz63@gmail.com");
$cad -> setSenha("123456");

//$cad como tem o metodo toString na classe é possivel renderizar o objeto

$cad -> registrarvenda();