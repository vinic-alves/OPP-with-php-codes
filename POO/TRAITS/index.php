<?php

    trait Objeto {
        public function teste() {
            echo "testando trait de objeto <br>";
        }
    }

    trait Testando {
        
        public $y = 10;

        public function traitTeste(){
            if(6 > 2){
                echo "Yes <br>";
            }
        }
    }

    class Central {

        use Objeto;
        use Testando;
    }

    $x = new Central;

    $x->teste();
    $x->traitTeste();
    
    echo $x->y . "<br>";