<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
    <?php
      include_once("bd.php");
      include_once("update.php");
      //isset pega apenas se a variável estiver com algum valor
      if(isset( $_GET['id'])){
        $id = $_GET['id'];
        
        $getAuthor = getAuthorById($id);
                
        foreach($getAuthor as $author){
            $nome = $author['nome'];
            $email = $author['email'];
            $website = $author['website'];
        }
      }

      if(isset($_POST['nomeF'])){
        $id = $_POST['idF'];
        $nome = $_POST['nomeF'];
        $email = $_POST['emailF'];
        $website = $_POST['websiteF'];
        
        updateRecord($id, $nome, $email, $website);
        }  
    ?>

    <form action="update.php" method="post">
        <div class="container border">
            <h1 class="text-center"> Author <?php echo $nome?> </h1>
            <div class="col-md-6 offset-md-3">
                <label class="form-label"> ID:</label>
                <input type="text" class="form-control" name="idF" placeholder= <?php echo $id?> >
            </div>
            <div class="col-md-6 offset-md-3">
                <label class="form-label">Name:</label>
                <input type="text" class="form-control" name="nomeF" placeholder= <?php echo $nome?>>
            </div>
            <div class="col-md-6 offset-md-3">
                <label class="form-label">Email:</label>
                <input type="text" class="form-control" name="emailF" placeholder= <?php echo $email?>>
            </div>
            <div class="col-md-6 offset-md-3">
                <label class="form-label">Website:</label>
                <input type="text" class="form-control" name="websiteF" placeholder= <?php echo $website?>>
            </div>
            <div class="col-md-6 offset-md-3 btn">
                <button class="btn btn-success" type="submit">Update</button>
                <a href='bookListing.php'><button class="btn btn-secondary" type="button">Back</button>
            </div>
        </div>
        <?php 
        ?>
    </form>

</body>
</html>