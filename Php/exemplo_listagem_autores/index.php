

<?php
	include_once("bd.php");
	$lista_autores = pesquisarListaAutores();
	
	//var_dump($lista_autores);
?>

<html>
<head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Website</th>
    </tr>
  </thead>
  <tbody>
   <?php
   foreach($lista_autores as $umAutor ){
	   
	   
	   
   ?>
    <tr>
      <th scope="row"><?php echo $umAutor['id'];?></th>
      <td><?php echo $umAutor['nome'];?></td>
      <td><?php echo $umAutor['email'];?></td>
      <td><?php echo $umAutor['website'];?></td>
    </tr>
	<?php
   }
	?>
  </tbody>
</table>


</body>
</html>