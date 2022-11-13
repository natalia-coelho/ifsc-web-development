<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
    <title>Exercício 3</title>
</head>
<body>
    <form name="form" action="index.php" method="post">
        <div class="container">
            <h1>Formulário - Exercício 3</h1>
            <div class="row">
                <div class="form-check form-check-inline">
                    <h6 for="exampleFormControlTextarea1">Horas Trabalhadas:</h6>
                    <input type="number" name="hora-trab" class="form-control" placeholder="Insira um valor" required>
                </div>
                <div class="form-check form-check-inline">
                    <h6 for="exampleFormControlTextarea2">Valor hora:</h6>
                    <input type="number" name="vl-hora" class="form-control" placeholder="Insira um valor" required>
                </div>
                <div class="form-check form-check-inline">
                    <h6 for="exampleFormControlTextarea3">Valor desconto:</h6>
                    <input type="number" name="vl-desconto" class="form-control" placeholder="Insira um valor">
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <input class="btn btn-success" type="submit" value="Calcular">
                </div>
            </div>
        </div>
        <?php 
            include('processaEx3.php');
        ?> 
    </form>

</body>
</html>