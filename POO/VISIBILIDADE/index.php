<?php

    class Car{

        public $rodas = 4;
        private $vidro = "sem película";

        public function getVidro() {
            return $this->vidro;
        }


    }

    class Mecanico{
        public function alterarRodas($carro){
            $carro->rodas =10;

        }
        public function colocarPelicula($carro, $pelicula){
            $carro->vidro = $pelicula;
        }
    }

    $carro = new Car;

    echo $carro->rodas . "<br>";

    $vinicius = new Mecanico;

    $vinicius->alterarRodas($carro);

    echo $carro->rodas . "<br>";

    //$vinicius->vidro($carro, "g20");
    //Não pode alterar porque é privado
    //$vinicius->colocarPelicula($carro, "G20");

    //$carro->peliculaDeFabrica("G10");
    echo $carro->getVidro() . "<br>";

