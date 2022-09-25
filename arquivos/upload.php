<html>
    <meta charset='utf-8'>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- Font Awesome Path, used for my icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
    <?php
        include_once('bd.php');
        $nome = $_POST['nome'];

        print_r($_FILES['foto']);
        
        $fileName = $_FILES['foto']['name'];
        $filePath = $_FILES['foto']['tmp_name'];
        $savedFilePath = 'imagens/'.$fileName;
        $type = $_FILES['foto']['type'];
        //defines in wich directory the path will be saved (CurrentPath, PathToBeSaved)
        $result = move_uploaded_file($filePath, $savedFilePath);


        //validating if it is an image or not
        if (preg_match('/^image\/(pjpeg|jpeg|png|gif|bmp|jpg)$/', $type)) {
            $message = "<h3> Received! </h3> 
                Name: $nome. <br> 
                File name: $fileName, <br> 
                File path: $filePath <br> 
                Type: $type<br>
                New path: $result, $savedFilePath <br>";
            echo $message;

            //Saving form data on database
            salvarFuncionario($nome, $savedFilePath);
        } else {
            echo '  <div class="alert alert-primary" role="alert">
                        <b>O arquivo deve ser do tipo imagem!</b>                  
                    </div>';
        }
        
        $listaFuncionario = pesquisarTodosFuncionarios();  
        echo "<h3>Lista de funcionários: </h3>";
        foreach($listaFuncionario as $funcionario){
          echo  "<table> 
                    <tr>";
            echo  "    <th scope='row'>" .$funcionario['id'] ."</th>";
            echo  "    <td>" .$funcionario['nome'] ."</td>";
            echo  "    <td>" .$funcionario['foto_endereco'] ."</td>";
          echo      "</tr>
                </table>";
        }

        echo '<br> <button onclick="history.back()">Voltar</button>';

    ?>
</body>
</html>
