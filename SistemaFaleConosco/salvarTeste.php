<?php

$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];
$mensagem = $_POST['msg'];

 // Processar/Gravar dados
 
$retorno = array();
$retorno['result'] = true;
$retorno['msg'] = "Mensagem recebida de ". $first_name;
echo json_encode($retorno);