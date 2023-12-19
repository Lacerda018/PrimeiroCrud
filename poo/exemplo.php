<?php

    class Pessoa {

        public $nome;//atributo

        public function falar(){//método

            return "O meu nome é ".$this->nome;

        }

    }

    $glaucio = new Pessoa();
    $glaucio->nome = "Glaucio Daniel";
    echo $glaucio->falar();
