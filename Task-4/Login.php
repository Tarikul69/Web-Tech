<?php
$namea = $_POST['name'];
$passa = $_POST['pass'];
$ad =  file_get_contents("data.json");
$aa = json_decode($ad, true);
 
if(isset($_POST['submit'])){
    if(empty($namea == $aa->name)){
        if($passa == $aa->pass){
           require("Welcome.php");
        }else{
            $error = "Wrong Password...";           
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
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
<body class="">
     
    <?php  include 'Navbar.php'?>
    <div>
    <div class="container body ">
        <div style="position: relative;top: 20px; left: 450px;" class="container">
         <h2 style="color: green">Login</h2>
        <form method="post"  >
            <div class="form-input">
            <i class="fa fa-user fa-2x cust" aria-hidden="true"></i> <br>
            <input type="text" name="name" value="" placeholder="Enter your name"> <br>
            <i class="fa fa-lock fa-2x cust" aria-hidden="true"></i> <br>
            <input type="password" name="pass" value="" placeholder="Enter your password"> <br>
            <br>
            <input class="btn btn-primary" type="submit" name="submit" value="LOGIN"> <br>
            <br>
            <input type="checkbox" name="remember" ><a>Remember me</a><br>
            <a href="ForgetPass.php">Forget Password?</a>
           
            </div>
        </form>

        </div>
    </div>


    </div>
    <?php include 'Footer.php'?>
</body>
</html>