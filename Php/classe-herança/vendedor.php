<?php
require_once 'empregado.php';

    class Vendedor extends Empregado{

        public $valorVendas;
        public $qtdVendas;
        
        public function mostrarDados(){
            echo "Valor Venda: " .$this->valorVendas = 1.0 . "<br>";
            echo "Qtd venda: " .$this->qtdVendas = 5 . "<br>";
        }
    }
?>