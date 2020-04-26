<?php

class Pessoa {

	public $nome; //Atributo = Variavel com mais "poderes"

	public function falar(){ //Método = Função "com mais poderes"

		return "O meu nome é ".$this -> nome;
	}
}

$glaucio = new Pessoa();
$glaucio -> nome = "Glaucio Daniel";
echo $glaucio -> falar();