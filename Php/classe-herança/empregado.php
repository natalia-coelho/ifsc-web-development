<?php
    require_once 'pessoa.php';

    class Empregado extends Pessoa {

        public $salario;
        public $matricula;
        
        public function valorINSS(){
            return float;
        }
        
        public function mostrarDados(){
            echo $salario;
            echo $matricula;
        }
    }
?>