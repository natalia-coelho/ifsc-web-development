<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
<?php
      include_once("bd.php");
      include_once("insert.php");
      //isset pega apenas se a variável estiver com algum valor
      if(isset( $_POST['nome'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $website = $_POST['website'];

        insertRecord($id, $nome, $email, $website);
    }

    $nxtID = returnNextId();
    ?>
<form action="insert.php" method="post">
    <div class="container border">
        <h1 class="text-center"> New Author </h1>
        <div class="col-md-6 offset-md-3">
            <label class="form-label"> ID:</label>
            <input type="text" class="form-control" name="id" placeholder=<?php foreach($nxtID as $id) {echo $id;} ?> readonly required>
        </div>
        <div class="col-md-6 offset-md-3">
            <label class="form-label">Name:</label>
            <input type="text" class="form-control" name="nome" required>
        </div>
        <div class="col-md-6 offset-md-3">
            <label class="form-label">Email:</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="col-md-6 offset-md-3">
            <label class="form-label">Website:</label>
            <input type="text" class="form-control" name="website">
        </div>
        <div class="col-md-6 offset-md-3 btn">
            <input class="btn btn-success" type="submit" value="Save">
            <a href='bookListing.php'><button class="btn btn-secondary" type="button">Back</button>
        </div>
    </div>
</form>
</body>
</html>