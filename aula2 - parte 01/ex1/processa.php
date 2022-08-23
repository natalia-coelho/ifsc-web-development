<?php 

//isset verifica se ele não foi chamado ainda
if(isset( $_POST['nome'])){

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    if ($idade >= 18) {
        echo "<div class='container'><br>
            <div class='alert alert-info'>";
        echo $nome ." Você é maior de idade!";
        echo "</div>
            </div>";
    } else {
        echo $nome ." Você é menor de idade!";
    }
}

