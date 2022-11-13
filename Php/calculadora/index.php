<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Calculadora</title>
</head>
<body>
    <form name="form" action="index.php" method="post">
        <div class="container">
            <h1>Formulário - Exercício 3</h1>
            <div class="row">
                <div class="form-check form-check-inline">
                    <h6 for="exampleFormControlTextarea1">Operador1 </h6>
                    <input type="number" name="op1" class="form-control" placeholder="Insira um valor" required>
                </div>
                <div class="form-check form-check-inline">
                    <h6 for="exampleFormControlTextarea2">Operador2:</h6>
                    <input type="number" name="op2" class="form-control" placeholder="Insira um valor" required>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="sum" value="sum">
                    <label class="form-check-label" for="inlineRadio1">Somar</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="subt" value="subt">
                    <label class="form-check-label" for="inlineRadio2">Subtrair</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="mult" value="mult">
                    <label class="form-check-label" for="inlineRadio3">Multiplicar</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="div" value="div">
                    <label class="form-check-label" for="inlineRadio4">Dividir</label>
                </div>
                <input class="btn btn-success" type="submit" value="Submit">  
            </div>
        </div>
        <?php 
            include('calculadora.php');
        ?> 
    </form>
</body>
</html>