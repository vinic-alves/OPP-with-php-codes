<?php

    abstract class Teste{

        public static function testandoClasse(){
            echo "Este método é de uma clase Abstrata <br>";
        }

        abstract public function testeAbs();
    }

    $t = new Teste;

    //echo $t->testandoClasse(); -> não se pode instanciar uma classe abstrata;

    Teste::testandoClasse(); 
    class Nova extends Teste {
        public function testeAbs(){
            echo "Teste Método Abstrato <br>";
        }
    }

    $n = new Nova;
    $n->testeAbs();
