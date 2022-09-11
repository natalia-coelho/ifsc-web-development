<!DOCTYPE html>
<html lang="en">
<head>
<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<!-- Font Awesome Path, used for my icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<title> Lista de autores </title>
</head>
<body>
<div class="container">
<h1 class="text-center">Book Listing</h1>
<table class="table border">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Website</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
      include_once("bd.php");
      $listAuthor = listAuthor();  

      foreach($listAuthor as $autor){
        echo  "<tr>";
        echo  "    <th scope='row'>" .$autor['id'] ."</th>";
        echo  "    <td>" .$autor['nome'] ."</td>";
        echo  "    <td>" .$autor['email'] ."</td>";
        echo  "    <td>" .$autor['website'] ."</td>";
        echo  "    <td>";
                    // pega o id através do método get com o ?
                    echo '<a href="insert.php?id='. $autor['id'] .'" class="mr-3" title="Insert Record" data-toggle="tooltip"><span class="fa-solid fa-circle-plus"></span></a>';
                    echo '<a href="update.php?id='. $autor['id'] .'&name='.$autor['nome'].'" class="mr-3" title="View or Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                    echo '<a href="delete.php?id='. $autor['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
        echo  "    </td>";
        echo  "</tr>";
      }
    ?>
  </tbody>
</table>
</div>
</body>
</html>
