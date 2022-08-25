<?php

$numero = $_GET['numero'];

    if($numero != 0){
        for($i=0; $i <=10 ; $i++){
            echo $numero = $numero * $i;
        }
    }