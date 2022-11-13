<?php
    
    //@todo
    
    $result = false;
    $retorno = array();
    $retorno['result'] = false;
    $retorno['msg'] = "Erro ao excluir mensagem!";

    if($result == true){
        $retorno['result'] = true;
        $retorno['msg'] = "Mensagem excluída com sucesso!!";
    }

    echo json_encode($retorno);


