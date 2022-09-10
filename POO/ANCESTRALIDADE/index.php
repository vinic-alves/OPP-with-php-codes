<?php


    class Humano{

    }
    class Professor extends Humano{

    }
    $rodrigo = new Professor;

    

    class Animal{

    }
    $turca = new Animal;


    $marcos = new Humano;

    if ($marcos instanceof Humano){
        echo "Marcos is human like us hahhahaharh <br> ";

    }

    if ($turca instanceof Humano){
        echo "Turca is an animal";
    }else{
        echo "A turca não é um Humano <br>";
    }

    if ($rodrigo instanceof Humano){
        echo "Rodrigo is Human like us hahaha";
    }else{
        echo "Unfortunally rodrigo is not a Human, it's an alien";
    }

