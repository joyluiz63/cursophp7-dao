<?php

class Documento
{
    private $numero;

	public function getNumero() {
		return $this -> numero;
	}

	public function setNumero($n) {
		$this -> numero = $n;
	}
}

class CPF extends Documento
{
    public function validarCPF(): bool
    {
        $numeroCPF = $this -> getNumero();
        //aqui iria as regras de validação do CPF
        return true;
    }
}

$doc = new CPF();
$doc -> setNumero("111222333-44");
var_dump($doc -> validarCPF());
echo "<br>";
echo $doc -> getNumero();

