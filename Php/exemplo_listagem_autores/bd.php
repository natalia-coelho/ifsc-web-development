<?php


function obterConexao(){
	$conexao = mysqli_connect("localhost", "root", "", 
	"estante");
	return $conexao;
}	

 
function pesquisarListaAutores(){
	$conexao = obterConexao();
	$comandoSQL = "select * from autor";
	$query = mysqli_query($conexao, $comandoSQL);
	$resultado = mysqli_fetch_all($query, MYSQLI_ASSOC);
	return $resultado;
}
 

 
