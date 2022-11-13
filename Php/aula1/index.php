<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <title>Formulário</title>
</head>

<body>
    <div class="container">
        <h1> Cadastro </h1>
        <form name="form-cadastro" action="realizarCadastro.php" method="post">
            <div class="row">
                <h6 for="exampleFormControlTextarea1">Nome Completo:</h6>
                <div class="col">
                    <input type="text" name="primeiro-nome" class="form-control" placeholder="First name">
                </div>
                <div class="col">
                    <input type="text" name="segundo-nome" class="form-control" placeholder="Last name">
                </div>
            </div>
            <div class="form-group">
                <h6 for="exampleFormControlInput1">Email:</h6>
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
            <h6 for="exampleFormControlTextarea1">Gênero: </h6>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="option1">
                <label class="form-check-label" for="inlineRadio1">Feminino</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                <label class="form-check-label" for="inlineRadio2">Masculino</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                    value="option3">
                <label class="form-check-label" for="inlineRadio3">Outro</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4"
                    value="option4">
                <label class="form-check-label" for="inlineRadio4">Prefiro não dizer</label>
            </div>
            <div class="form-group">
                <h6 for="curso">Curso:</h6>
                <select class="form-control" id="curso">
                    <option selected>Selecione</option>
                    <option> Programador Web </option>
                    <option>Banco de Dados </option>
                    <option>Ciência de Dados </option>
                </select>
            </div>
            <div class="form-group">
                <h6 for="inputAddress">Endereço:</h6>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <h6 for="inputCity">Cidade:</h6>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <h6 for="inputState">Estado:</h6>
                    <select id="estado" name="estado" class="form-control">
                        <option>Selecione</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                        <option value="EX">Estrangeiro</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <h6 for="inputZip">CEP:</h6>
                    <input type="text" class="form-control" id="inputZip"><br>
                </div>
            </div>
            <div class="dropdown">
                <button class="btn btn-success" type="submit">
                    Salvar
                </button>
                <button class="btn btn-danger" type="reset">
                    Limpar
                </button>
            </div>
        </form>
    </div>
    <script src="jquery/jquery-3.6.0.min.js"></script>
</body>

</html>