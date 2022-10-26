<?php

    //@todo
          
    $resultado = false;
    
    $retorno = array();
    $retorno['result'] = false;
    $retorno['msg'] = "Deu Ruim!";

    if($resultado == true){
        $retorno['result'] = true;
        $retorno['msg'] = "Mensagem enviada com Sucesso!";
    }

    echo json_encode($retorno);


