<!DOCTYPE html>
<html lang="en">
<head>
<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<title> Lista de autores </title>
</head>
<body>
<h1 class="text-center">Listagem de Livros</h1>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Website</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include_once("bd.php");
    $listaAutores = listaAutores();  

    foreach($listaAutores as $autor){
      echo  "<tr>";
      echo  "    <th scope='row'>" .$autor['id'] ."</th>";
      echo  "    <td>" .$autor['nome'] ."</td>";
      echo  "    <td>" .$autor['email'] ."</td>";
      echo  "    <td>" .$autor['website'] ."</td>";
      echo  "</tr>";
    }
    ?>
  <form name="form" action="index.php" method="post">
      

  </form>
  </tbody>
</table>
</body>
</html>
