<?php

class Humano {
    public const OLHOS = 2;
    public const BRACOS = 2;
    public const PERNAS = 2;

    public function mostrarConstantes(){
        echo self::BRACOS . "<br>";
    }
}

$vinicius = new Humano;

echo $vinicius::OLHOS . "<br>";

$vinicius->mostrarConstantes(); 