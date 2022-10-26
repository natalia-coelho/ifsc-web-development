<?php

//@todo

$lista = array()

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Exercicio Ajax</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

	<h2 class="sub-header">Listagem contatos</h2>
	<br>
	<div class="table-responsive" id="listagem">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Código</th>
					<th>Nome pessoa</th>
					<th>E-mail</th>
					<th>Mensagem</th>
				</tr>
			</thead>
			<tbody>
			
			<?php


			for($i=0;$i<count($lista);$i++){
				$contato=$lista[$i];
			?>
			<tr>
				<td><?=$contato->getCodigo()?></td>
				<td><?=$contato->getNome()?></td>
				<td><?=$contato->getEmail()?></td>	
				<td><?=$contato->getMensagem()?></td>
				<td><a href="javascript:excluirMensagem(<?=$contato->getCodigo()?>)">Excluir</a></td>
			</tr>
			<?php			
		}
		?>
	</tbody>
</table>

