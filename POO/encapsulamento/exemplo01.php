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

$objeto = new Pessoa();

//PUBLIC - Pode ser acessado de qualquer lugar
//PROTECTED - Pode ser acessado somente dentro da classe mãe e das filhas
//PRIVATE - Pode ser acessado somente dentro da classe

echo $objeto -> nome . "<br>"; // O nome é public pode ser acessado
//echo $objeto -> idade . "<br>"; // O nome é protected não pode ser acessado

$objeto -> verDados();