<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
    <title>Exercício 1</title>
    <?php include_once('processa.php') ?>

</head>
<body>
    <form name="form" action="index.php" method="get">
        <div class="container">
            <h1>Formulário - Exercício 2</h1>
            <div class="row">
                <div class="form-check form-check-inline">
                    <h6 for="exampleFormControlTextarea1">Número:</h6>
                    <input type="number" name="numero" class="form-control" placeholder="numero" required>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <input class="btn btn-success" type="submit" value="Mostrar">
                </div>
            </div>
        </div>
        <?php 
            include 'processa.php';
        ?> 
    </form>

</body>
</html>