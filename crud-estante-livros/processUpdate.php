<?php

    if(isset( $_POST['nomeF'])){
        $nomeF = $_POST['nomeF'];
        $emailF = $_POST['emailF'];
        $websiteF = $_POST['websiteF'];

        echo " $nomeF, $emailF, $websiteF";
        
    }
?>