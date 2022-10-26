<?php
require_once 'empregado.php';

    class Gerente extends Empregado {

        public $nomeGerencia;
        
        public function mostrarDados(){
            echo "Nome gerência: " .$this->nomeGerencia = "Vendas" ."<br>";
        }
    }
?>