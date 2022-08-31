<?php
/*1) Crie uma função que receba como parâmetro um vetor com 10
números. A função deverá imprimir:
Quantidade de números negativos;
Quantidade de números positivos;
Quantidade de números pares
Quantidade de números ímpares*/


imprimeNumero(1,);

function imprimeNumero($vetor=array()){
    for($i = 0; $i < $vetor.sizeof(); $i++){
        echo $vetor[$i];
    }
}
?>
