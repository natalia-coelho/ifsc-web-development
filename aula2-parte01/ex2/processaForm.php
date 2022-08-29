<?php
if(isset( $_GET['numero'])){

$numero = $_GET['numero'];
    echo '<div class="container">';
    echo "<div class='alert alert-secondary'>";
    echo "<h3>Tabuada do " .$numero ."</h3>";
    for($i=0; $i <=10 ; $i++){
        $result = $numero * $i;
        echo $numero .'X' .$i .'=' .$result .'<br>';
    }
    echo '</div>
    </div>';
}
?>