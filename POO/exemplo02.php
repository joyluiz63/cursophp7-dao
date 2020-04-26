<?php

class Carro {

	private $modelo;
	private $motor;
	private $ano;

	public function getModelo() {

		return $this -> modelo;

	}

	public function setModelo($modelo) {

		$this -> modelo = $modelo;
	}

		public function getMotor() : float {

		return $this -> motor;

	}

	public function setMotor($motor) {

		$this -> motor = $motor;
	}

		public function getAno() : int {

		return $this -> ano;

	}

	public function setAno($ano) {

		$this -> ano = $ano;
	}

	public function exibir() {

		return array (
			"modelo" => $this -> getModelo(),
			"motor" => $this -> getMotor(),
			"ano" => $this -> getAno()
		);
	}

}

$gol = new carro();
$gol -> setModelo ("Gol GT");
$gol -> setMotor ("1.6");
$gol -> setAno ("2021");

echo "Array exibido com print_r ";
echo "<br>";
print_r($gol -> exibir());

echo "Array exibido com var_dump ";
echo "<br>";
var_dump($gol -> exibir());