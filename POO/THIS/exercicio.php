<?php

// Crie uma classe carro
// crie propriedades e também a propriedade velocidade_maxima;
// crie o metodo setVelocidadeMaxima, onde é possível alterar a velocidade máxima do carro

// e também getVelocidadeMaxima, onde é possível imprimir a velocidade do carro;

    class Carro{

        public $cor;
        public $marca;
        public $modelo;
        public $velocidadeMaxima;

        public function setVelocidadeMaxima($vel){
            $this->velocidadeMaxima = $vel;
            
        }
        public function getVelocidadeMaxima(){
            echo $this->velocidadeMaxima;
        }
    }

    $fusca = new Carro;
    $fusca->setVelocidadeMaxima(80);

    $fusca->getVelocidadeMaxima();