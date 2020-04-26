<?php

define("BANCO_DE_DADOS", [     	//Define a conexão do banco em uma constante
	'127.0.0.1',				//Endereço de IP
	'root',						//nome de usuário
	'password',					//senha
	'test'						//Nome do banco de dados
]);								//Nesta linha se fizer assim: ],true); - fica case insensitive, tanto faz ser maiuscula ou minuscula

print_r(BANCO_DE_DADOS);