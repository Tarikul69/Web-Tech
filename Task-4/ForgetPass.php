<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
     .body{
            background: lavender;
            margin: 20px;
            border: 1px solid black;
            padding: 5px;           
        }
</style>
<body>
    <?php include 'Navbar.php'?>
    <form class="body" type='submit' method="post">
    <br>
    <br>
    <br>
    <br>
    <div class="container col-3">
       Email: <input type="text" name="passRecover" placeholder="Enter your email">
       <br>
       <br>
       <input class="btn btn-primary" type="Submit" name='submit'>
       <br>
       <br>
       <br>
       <br>


    </div>

    </form>
    <?php include 'Footer.php'?>
</body>
</html>