<?php
    require_once 'vendedor.php';        
    require_once 'gerente.php'; 
    require_once 'cliente.php'; 

    $v1 = new Vendedor();
    $v2 = new Vendedor();

    $g1 = new Gerente();
    $g2 = new Gerente();
    $g3 = new Gerente();

    $c1 = new Cliente();
    $c2 = new Cliente();
    $c3 = new Cliente();

    $listaPessoas = array( $v1, $v2, $g1, $g2, $g3, $c1, $c2, $c3 );

    foreach($listaPessoas as $lp){      
        $lp -> mostrarDados();
    }
?>