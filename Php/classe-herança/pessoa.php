<?php
    abstract class Pessoa {

        public $nome;
        public $idade;
        public $sexo;
        
        public function mostrarDados(){
            echo $nome;
            echo $idade;
            echo $sexo;
        }
    }
?>