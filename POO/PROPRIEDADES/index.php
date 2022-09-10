<?php

    class Car {
        
        public $rodas = 4;
        public $aro   = 20;

        function ligar() {
            echo "vrummm <br>";
        }

    }

    $ferrari = new Car;

    echo  $ferrari->aro;
