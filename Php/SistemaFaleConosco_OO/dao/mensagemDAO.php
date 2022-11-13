<?php
@include_once "dao/conexao.php";
@include_once "model/mensagem.php";

class MensagemDAO
{
	protected $conn;

	function __construct()
	{
		$conexao = new conexao();

		$this->conn = $conexao->getConexao();
	}

	public function buscarTodasMensagens(){
		$comandoSQL = 'select * from contato';
		$resultado = $this->conn->query ($comandoSQL);
		
		$arrayMsgs = array();
		foreach ($resultado as $umRegistro) {
			$msg = new Mensagem();
			$msg->setCodigo($umRegistro['codigo']);
			$msg->setNome($umRegistro['nome']);
			$msg->setEmail($umRegistro['email']);
			$msg->setTelefone($umRegistro['telefone']);
			$msg->setMensagem($umRegistro['mensagem']);
			array_push($arrayMsgs, $msg);
		}
		return $arrayMsgs;
	}

	public function buscarMensagensPorCodigo($codigo){
		$comandoSQL = 'select * from contato where codigo = :codigo';
		$stmt = $this->conn->prepare($comandoSQL);

		$resultado = $stmt->execute(array('codigo'=>$codigo));

		$contato = null;

		while ($umRegistro = $stmt->fetch()){
			$msg = new Mensagem();
			$msg->setCodigo($umRegistro['codigo']);
			$msg->setNome($umRegistro['nome']);
			$msg->setEmail($umRegistro['email']);
			$msg->setTelefone($umRegistro['telefone']);
			$msg->setMensagem($umRegistro['mensagem']);
		}

		return $msg;
	}

	public function inserirMensagem($msg){
		try{

			$comandoSQL='insert into contato (nome, email, telefone, mensagem)
			VALUES (:nome, :email, :telefone, :mensagem)';
			$stmt = $this->conn->prepare($comandoSQL);
			$resultado=$stmt->execute(array(
				':nome' => $msg->getNome(),
			    ':email' => $msg->getEmail(),
			    ':telefone' => $msg->getTelefone(),
			    ':mensagem' => $msg->getMensagem()));
		}catch(PDOException $e){
			return false;
		}
		return true;
	}

	public function excluirMensagem($id){
		try{

			$comandoSQL='delete from contato where codigo = :id';

			$stmt = $this->conn->prepare($comandoSQL);
			$resultado=$stmt->execute(array(
				':id' => $id));
		}catch(PDOException $e){
			return false;
		}
		return true;
	}


}

?>
