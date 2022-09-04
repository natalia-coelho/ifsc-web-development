<?php
    //include_once('bd.php'); //vai pegar as info do arquivo
    
    //foreach($lista_autores as $umAutor)
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
    <!-- criar um table do bootstrap -->
    <!-- criar tabela autor no bd -->
    <!-- listagem de livros faz um join -->

    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <!-- foreach($lista_autores as $umAutor) -->
            <!-- como imprimir o array do php exemplo: -->
            <!-- EXEMPLO DO PROF
                    <tr>
                        <th scope="row"><?php echo $umAutor['id'];?></th>
                        <td>fazer a msm coisa com nome</td>
                        <td>fazer a msm coisa com idade etc</td>
                    </tr> 
            -->
            <th scope="row"><!--<?php echo $umAutor['id'];?>--></th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            </tr>
        </tbody>
    </table>
</body>
</html>