<?php
// Modo procedural de conexão(mysqli), outra opção é usar PDO
function obterConexao(){
	$hostName = "localhost"; 
	$user = "root"; 
	$password = ""; 
	$database = "estante";
	
    $conexao = mysqli_connect($hostName, $user, $password, $database);
	return $conexao;
}
$conexao = obterConexao();

	//Se houver erro com a conexão: 
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
	}
  

	function returnNextId(){
		$conexao = obterConexao();
		$sql = "select MAX(id)+1 from autor";
		$setQuery = mysqli_query($conexao, $sql);
		$result = mysqli_fetch_assoc($setQuery);

		return $result;
	}

	function insertRecord($id, $nome, $email, $website){
		$conexao = obterConexao();
		$sql = "insert into autor values('$id', '$nome' , '$email' , '$website');";
		$setQuery = mysqli_query($conexao, $sql);
		if (!$setQuery) {
			return "Error: " . $sql . "<br>" . mysqli_error($conexao);
		}
	}
	
	function updateRecord($id, $nome, $email, $website){
		$conexao = obterConexao();
		$sql = "update autor set nome = '$nome', email = '$email', website = '$website' where id = $id;";
		$setQuery = mysqli_query($conexao, $sql);
		if (!$setQuery) {
			return "Error: " . $sql . "<br>" . mysqli_error($conexao);
		}
	}

	// function updateRecord($field, $value, $id){
	// 	$conexao = obterConexao();
	// 	$sql = "update autor set $field = '$value' where id = $id;";
	// 	$setQuery = mysqli_query($conexao, $sql);
	// 	if (!$setQuery) {
	// 		return "Error: " . $sql . "<br>" . mysqli_error($conexao);
	// 	}
	// }

	function deleteRecord($id){
		$conexao = obterConexao();
		$sql = "delete from autor WHERE id = $id";
		$setQuery = mysqli_query($conexao, $sql);
		if (!$setQuery) {
			return "Error: " . $sql . "<br>" . mysqli_error($conexao);
		}
	}

	function listAuthor(){
		$conexao = obterConexao();
		$comandoSQL = "select * from autor order by id;";
		$setQuery = mysqli_query($conexao, $comandoSQL);
		$resultado = mysqli_fetch_all($setQuery, MYSQLI_ASSOC);
		return $resultado;
	}

	function getAuthorById($id){
		$conexao = obterConexao();
		$comandoSQL = "select * from autor where id = $id;";
		$setQuery = mysqli_query($conexao, $comandoSQL);
		$resultado = mysqli_fetch_all($setQuery, MYSQLI_ASSOC);
		return $resultado;
	}
?>