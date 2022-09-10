<?php


// metodos dentro de uma classe

    Class Pessoa{

        function falar(){
            echo "Oie";
        }

        function somar ($x , $y) {
            echo "A soma de $x e $y é igual a " . $x + $y . "<br>";
        }

    }


    $vinicius = new Pessoa;
    $saudacao = $vinicius->falar();
    echo $saudacao;

    $vinicius->somar(8, 8);

     