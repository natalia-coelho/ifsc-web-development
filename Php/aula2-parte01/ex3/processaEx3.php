<?php

if(isset( $_POST['hora-trab']) && isset($_POST['vl-hora'])){
    $hrTrab = $_POST['hora-trab'];
    $vlHora = $_POST['vl-hora'];
    $vlDesconto = $_POST['vl-desconto'];

    if($vlDesconto == null){
        $vlDesconto = 0;
    }
    $salario = ($hrTrab * $vlHora) - $vlDesconto;
    echo "'<div class='container'><br>
            <h3> Salário: </h3>
        <div class='alert alert-info'>";
    echo 'Salário: ' ;
    echo $salario;
    echo '</div>
        </div>';
}