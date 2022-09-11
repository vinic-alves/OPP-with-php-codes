<?php

// Crie uma classe Cachorro com Propriedades
// Inicie as propriedades via constructor
// crie um método para exibir cada um das propriedades;

    class Cachorro {
        public $patas;
        public $orelhas;
        
        function __construct($patas, $orelhas){
            $this->patas = $patas;
            $this->orelhas = $orelhas;
        }
        public function exibePropriedades(){
            echo " $this->patas e $this->orelhas";
        }
    }

    $dog = new Cachorro(4, 2);
    $dog->exibePropriedades();