
<?php
$uname = $_POST['uname'];
$pass = $_POST['pass'];
$error = " ";
$success = " ";

if(isset($_POST['submit'])){

    if(empty($uname == "Admin")){
        if($pass == "password" || strlen($pass) == 7){
             $success = "Welcome...";
        }else{
            $error = "Wrong Password...";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div style="position: relative;top: 150px; left: 450px;" class="container">
        <p> <?php echo $error ?> </p> <p> <?php echo $success ?> </p>
        <form method="post" action="">
            <div class="form-input">
            <i class="fa fa-user fa-2x cust" aria-hidden="true"></i> <br>
            <input type="text" name="uname" value="" placeholder="Enter your name"> <br>
            <i class="fa fa-lock fa-2x cust" aria-hidden="true"></i> <br>
            <input type="password" name="pass" value="" placeholder="Enter your password"> <br>
            <br>
             
            <input class="btn btn-primary" type="submit" name="submit" value="LOGIN"> <br>
            <a href="#">Fprget Password</a>
           
            </div>
        </form>

        </div>
    </div>
    <script>
        import React from "react";
    </script>
</body>
</html>