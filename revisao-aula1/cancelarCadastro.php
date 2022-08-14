<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Cancelado!</title>
</head>

<body>
    <div class="container">
        <div class="container">
            <h1>Cadastro cancelado</h1>
        </div>

        <?php require 'index.php';
            echo "<div class='alert alert-danger' role='alert'>";
            echo "Prezado(a) <b>" . $_POST['primeiro-nome'] ."</b> seu cadastro foi cancelado. </div> ";
        ?>
        <div>
            <a href='index.php'>
                <button class="btn btn-primary" type="button">Voltar</button>
        </div>
</body>

</html>