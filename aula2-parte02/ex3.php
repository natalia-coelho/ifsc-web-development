<?php
/*3) Crie uma matriz (array muntidimensional) com os dados abaixo. Em 
seguida, crie uma função que receba como parâmetro essa matriz 
criada e imprima os dados da matriz utilizando a estrutura de 
repetição FOR;
Nome Telefone
Jhon 30332211
Bob 20221212
Clara 98223311
Linda 44330293
James 38343321*/


$matriz = array(
	array("Nome" => "Jhon", "Telefone" => "30332211"),
	array("Nome" => "Bob", "Telefone" => "20221212"),
	array("Nome" => "Clara", "Telefone" => "98223311"),
	array("Nome" => "Linda", "Telefone" => "44330293"),
	array("Nome" => "James", "Telefone" => "38343321")
	);

	imprimeMatriz($matriz);


function imprimeMatriz($matrizP = array(array())){
	foreach($matrizP as $mat){
		foreach($mat as $m){
			echo($m . " ");
		}
		echo "\n";
	}
}

?>
