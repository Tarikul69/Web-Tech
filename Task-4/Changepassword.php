<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-4</title>
</head>
<style>
     .body{
            background: lavender;
            margin: 20px;
            border: 1px solid black;
            padding: 5px;           
        }
</style>
<body class="col-12">
     
    <?php include("Dashboard.php")?>
    <div class="row   body">
        <br>
        <br>
    <div class="col-4">
        <?php include('DButton.php')?>
    </div>
    <div class="container col-8">
    <form type='submit' method="post">
    <br>
    <br>
    <br>
    <br>
    <div class="container col-3">
       Old Password: <input type="text" name="passRecover" placeholder="Enter your email">
       <br>
       New Password: <input type="text" name="passRecover" placeholder="Enter your email">
       <br>
       <br>
       <input class="btn btn-primary" type="Submit" name='submit'>
       <br>
       <br>
       <br>
       <br>
    </div>
    </form>     
    </div>
    </div>
<?php include 'footer.php'?> 
</body>
</html>