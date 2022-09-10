<?php
    

    interface Caracteristics{
        const name = 'Vinicius';
        public function speak();
    }

    class Human implements Caracteristics{
        public $age = 27;

        public function speak(){
            echo "that's Vinny Here, How may I help ya <br>";
        }

        public function sayName(){
            echo "I'm (';') " . self::name . "<br>";
        }
    }

    $vinicius = new Human;

    $vinicius->speak();

    $vinicius->sayName();
