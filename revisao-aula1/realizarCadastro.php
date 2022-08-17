<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Retorno</title>
</head>

<body>
    <div class="container">
        <h1>Cadastro Realizado</h1>
        <p>Dados cadastrados:</p>
        
        <?php
            echo "<div class='alert alert-success' role='alert'>";
            echo "Prezado(a) <b>" . $_POST["primeiro-nome"] ." ".$_POST["segundo-nome"]."</b> seu cadastro foi realizado com sucesso!</div> Em breve você receberá mais
            informações no e-mail: " .$_POST["email"] .".";
        ?>
        
        <p>
            <a href='index.php'><button class="btn btn-primary" type="button">Voltar</button>
            <a href='cancelarCadastro.php'><button class="btn btn-danger" type="reset">Cancelar cadastro</button>
        </p>

    </div>
</body>
</html>