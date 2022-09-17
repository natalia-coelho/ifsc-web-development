
<?php



session_start();

if(isset($_SESSION['autenticado'])==true){
	header('Location: bookListing.php');
	
}


$login = '';
$selecionado = '';
if(isset($_COOKIE['login']))
{ 
	$login = $_COOKIE['login'];
	$selecionado = 'checked';
}
?>
<html lang="en">
<head>
<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<!-- Font Awesome Path, used for my icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
    <form method="post" action="login.php">
	<div class="container">
      <div class="col-md-6 offset-md-3">
	  	<h1 class="text-center"> Login </h1>
        <label class="form-label">Login:</label>
        <input type="text" class="form-control" name="login" />
      </div>
      <div class="col-md-6 offset-md-3">
        <label class="form-label">Password:</label>
        <input type="text" class="form-control" name="senha" />
      </div>
      <div class="col-md-6 offset-md-3 form-check">
        <input class="form-check-input" type="checkbox" name="lembrar" <?=$selecionado?>>
        Remember </div>
		<div class="col-md-6 offset-md-3 btn">
			<button type="submit" class="btn btn-primary">Sign in</button>
		</div>
	</div>
	</form>
</body>
</html>

<?php


