<?php
/*1) Crie uma função que receba como parâmetro um vetor com 10
números. A função deverá imprimir:
Quantidade de números negativos;
Quantidade de números positivos;
Quantidade de números pares
Quantidade de números ímpares*/


imprimeNumero($vetor=[2, 6, 8, -7, 5, -6, -1]);

function imprimeNumero($vetor=array()){
	$neg = 0; $pos = 0; $par = 0; $imp = 0;
	
    for($i = 0; $i < sizeof($vetor); $i++){
    	if($vetor[$i] < 0){
			$neg = $neg + 1;   
    	} elseif($vetor[$i] >= 0){
    		$pos = $pos + 1;
    	} 
    	if($vetor[$i] % 2 == 0){
    		$par = $par + 1;
    	}
    	if($vetor[$i] % 2 != 0){
    		$imp = $imp + 1;
    	}
    }
    
        echo "Negativos: " .$neg;
        echo "\nPositivos: " .$pos;
        echo "\nPares: " .$par;
        echo "\nÍmpares: " .$imp;
        
}
?>
