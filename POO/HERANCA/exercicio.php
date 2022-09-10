<?php
// criar uma classe Humano com algumas propriedades e o método de falar
// criar outra classe Professor, que herda Humano, crie também as propriedades e metodos particulares dessa classe

//Exiba os valores das propriedades da classe pai e também utilize os métodos;

    class Humano{
        public $bracos = 2;
        public $olhos = 2;
        public $dedos = 10;

        public function falar(){
            echo "Oieeeee <br>";

        }
    }

    class Professor extends Humano {
        public $materia = "matematica";
        public $alunos = ["Marcia", "Aline", "Leticia", "José", "Pedro", "elias"];
        
        public function ensinar(){
            echo "Eu sou um professor";
        }

    }

    $rodrigo = new Professor;

    echo $rodrigo->dedos + $rodrigo->olhos;
    $rodrigo->falar();