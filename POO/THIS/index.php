<?php

    class Animal {

        public $nome;
        
        function escolherNome($nome) {
            $this->nome = $nome;
        }
    }

    $frida = new Animal;

    $frida->escolherNome("Frida");