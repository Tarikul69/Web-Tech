<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
<?php require("Dashboard.php")?>
    <div class= "body row" >
         
        <div class="col row">
            <div class=" col-4">
                 <?php  include("DButton.php")?>

            </div>
            <div class=" col-6">
                <h1>
                    ghhh
                </h1>

            </div>

        </div>
         
    </div>
    <?php require('Footer.php')?>
</body>
</html>