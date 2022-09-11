<?php

    class Humano {
        public $idade;
        public $nome;
        public $profissao;
    }
    if(class_exists("Humano")){
        echo "A classe existe";
    }else{
        echo "A classe não existe";
    }

    if(get_class_vars($this->idade)){
        echo "Existe essa propriedade";
    }


