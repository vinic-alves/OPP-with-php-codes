<?php

    class Humano{

        public $idade = 43;

        public function falar( ){
            echo "Oie";
        }
        private function gritar(){
            echo "PHP É MUITO FODA";
        }
        public function acessarGritar(){
            $this->gritar();
        }
        protected function falarBaixo(){
            echo "lalallala";
        }
        public function acessaFalarBaixo(){
            $this->falarBaixo();
        }

    }

    class Programador extends Humano {

    }

    $ze = new Humano;

    $ze->falar();
    $ze->acessarGritar();

    $vinicius = new Programador;
    $vinicius->idade = 27;
    echo $vinicius->idade . "<br>";
    $vinicius->falar();

    $vinicius->acessaFalarBaixo();