<?php

if(isset($_POST['op1']) && isset($_POST['op2'])){

    $op1 = $_POST['op1'];
    $op2 = $_POST['op2'];

    $radio = $_POST['inlineRadioOptions'];

    // $sum = $_POST['sum'];    
    // $subt = $_POST['subt'];
    // $mult = $_POST['mult'];
    // $div = $_POST['div'];

    if($radio == 'sum'){
        echo "<div class='container'>
                <div class='alert alert-dark' role='alert'>";
        echo    "<b> Resultado: </b>"    .$op1 + $op2;
        echo    "</div>
            </div>";
    } else if($radio == 'subt'){
        echo "<div class='container'>
                <div class='alert alert-dark' role='alert'>";
        echo    "<b> Resultado: </b>"    .$op1 - $op2;
        echo    "</div>
            </div>";
    } else if($radio == 'mult'){
        echo "<div class='container'>
                <div class='alert alert-dark' role='alert'>";
        echo    "<b> Resultado: </b>"    .$op1 * $op2;
        echo    "</div>
            </div>";
    } else if($radio == 'div'){
        echo "<div class='container'>
                <div class='alert alert-dark' role='alert'>";
        echo    "<b> Resultado: </b>"    .$op1 / $op2;
        echo    "</div>
            </div>";
    }

}

?>
