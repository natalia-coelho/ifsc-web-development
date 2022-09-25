<?php
$conexao = Null;
function obterConexao(){
	global $conexao;
	if ($conexao == Null){
		$conexao = mysqli_connect("localhost", "root", "", "arquivo");
	}
	return $conexao;
}

function salvarFuncionario($nome, $foto_end){
    $conexao = obterConexao();
	$sql = "insert into funcionario(nome, foto_endereco) values('$nome', '$foto_end');";
	$setQuery = mysqli_query($conexao, $sql);
}

function pesquisarTodosFuncionarios(){
    $conexao = obterConexao();
	$sql = "select * from funcionario order by id;";
	$setQuery = mysqli_query($conexao, $sql);
	$resultado = mysqli_fetch_all($setQuery, MYSQLI_ASSOC);
	return $resultado;

	// $result_array = [];
}

