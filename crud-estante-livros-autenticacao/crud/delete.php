<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
<?php
    include_once("bd.php");
        $id = $_GET['id'];
        
        $getAuthor = getAuthorById($id);
        
        foreach($getAuthor as $author){
            $nome = $author['nome'];
            $email = $author['email'];
            $website = $author['website'];
        }
?> 
    <form action="delete.php" method="get">
        <div class="container border">
            <h1 class="text-center"> Author <?php echo $author['nome']?> </h1>
            <div class="col-md-6 offset-md-3">
                <label class="form-label"> ID:</label>
                <input type="text" class="form-control" name="id" placeholder= <?php echo $id?> readonly>
            </div>
            <div class="col-md-6 offset-md-3">
                <label class="form-label">Name:</label>
                <input type="text" class="form-control" name="nome" placeholder= <?php echo $author['nome']?> readonly>
            </div>
            <div class="col-md-6 offset-md-3">
                <label class="form-label">Email:</label>
                <input type="text" class="form-control" name="email" placeholder= <?php echo $author['email']?> readonly>
            </div>
            <div class="col-md-6 offset-md-3">
                <label class="form-label">Website:</label>
                <input type="text" class="form-control" name="website" placeholder= <?php echo $author['website']?> readonly>
            </div>
            <div class="col-md-6 offset-md-3 btn">
                <a href='bookListing.php'><button class="btn btn-danger" type="button" onclick="clickMe()">Delete </button>
                <a href='bookListing.php'><button class="btn btn-secondary" type="button">Back</button>
            </div>
        </div>
    </form>
<script>
    function clickMe(){
        var result ="<?php deleteRecord($id);?>"
        document.write(result);
    }
</script>
</body>
</html>