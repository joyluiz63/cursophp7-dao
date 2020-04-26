<?php

class Pessoa
{
    public      $nome = "Rasmus Lerdorf"; 
    protected   $idade = 48;
    private     $senha = "123456";

    public function verDados()
    {
        echo $this -> nome."<br>";
        echo $this -> idade."<br>";
        echo $this -> senha."<br>";
    }
}

class Programador extends Pessoa
{
    public function verDados()
    {
        echo $this -> nome."<br>";
        echo $this -> idade."<br>";
        echo $this -> senha."<br>"; //Notice: Undefined property: Programador::$senha in C:\xampp\htdocs\udemy\POO\encapsulamento\exemplo02.php on line 23
    }
}

$objeto = new Programador();
$objeto -> verDados();