<?php

    class Humano{
        public function falar(){
            echo "Olá";
        }
    }


    $vinicius = new Humano;

    if( is_object($vinicius)) {
        echo " É um objeto <br> ";
    } else {
        echo "Não é um objeto <br>";
    }


    echo get_class($vinicius) . "<br>";

    if(method_exists($vinicius, "falar")){
        echo "Método existe";
    }else{
        echo "Método não existe";
    }