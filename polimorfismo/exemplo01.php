<?php

abstract class Animal
{
    public function falar()
    {
        return "Som";
    }
    public function mover()
    {
        return "Anda";
    }
}

class Cachorro extends Animal
{
    public function falar()  //POLIMORFISMO esta sobrescrevendo o metodo ja declarado acima
    {
        return "Late: au, au, au, au";
    }
}

class Gato extends Animal
{
    public function falar()  //POLIMORFISMO esta sobrescrevendo o metodo ja declarado acima
    {
        return "Mia: miau, miau, miau, miau";
    }
}

class Passaro extends Animal
{
    public function falar()  //POLIMORFISMO esta sobrescrevendo o metodo ja declarado acima
    {
        return "Canta: fiuuuuuu";
    }
    public function mover()
    {
        return parent::mover(). " e Voa" ;
    }
}

$pluto = new Cachorro();
echo "pluto é um cachorro e ";
echo $pluto->falar() . "<br>";
echo $pluto -> mover() . "<br>";
echo "<hr>";

$tom = new Gato();
echo "tom é um gato e ";
echo $tom->falar() . "<br>";
echo $tom -> mover() . "<br>";
echo "<hr>";

$Piupiu = new Passaro();
echo "Piupiu é um passaro e ";
echo $Piupiu->falar() . "<br>";
echo $Piupiu -> mover() . "<br>";
echo "<hr>";
