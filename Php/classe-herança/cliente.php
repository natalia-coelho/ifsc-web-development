<?php
require_once 'pessoa.php';

    class Cliente extends Pessoa {

        public $valorDivida;
        public $anoNascimento;
        
        public function valorINSS(){
            return float;
        }
        
        public function mostrarDados(){
            echo "Valor dívida: " .$this->valorDivida = "6000.00" ."<br>";
            echo "Ano nascimento: " .$this->anoNascimento = 1998 ."<br>";
        }
    }
?>