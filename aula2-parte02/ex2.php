<?php
/* 2)Crie uma função que receba como parâmetro dois vetores com 10 
números cada. A função deverá realizar a multiplicação dos dois 
vetores em cada uma de suas respectivas posições. Armazene o 
resultado em um terceiro vetor resultante. Ao final, imprima os 
valores dos três vetores.
Ex.: vetor_a[0] * vetor_b[0] */

	multiplicaVetores($a=[0, 1, 2, 3], $b=[0, 1, 2, 3]);

	function multiplicaVetores($vet1=array(), $vet2=array()){
		$vet3=array();
		if(sizeof($vet1) == sizeof($vet2)){
			for($i = 0; $i < sizeof($vet1); $i++){
				$vet3[$i] = $vet1[$i] * $vet2[$i];
				
			echo $vet1[$i] .'X' .$vet2[$i] .'=' .$vet3[$i] ."\n";
			}
		} else {
			echo 'Insira vetores do mesmo tamanho!';
		}
	}
?> 
