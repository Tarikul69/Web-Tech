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
<body class="col-12">
    <?php include("Nav.php")?>
    <div class="container">
    <div class="row body">
    <div class="col-5">
    <?php include("Options.php")?>
    </div>
    <br>
    <br>
    <div class="container col">
    <form name="form" action=""class="col" method="post">
 
        <div class="container col-10 ">
            <div class=" col" >
                <h2 style="color: green">Edit Profile</h2> <br>
                Name:
                <input type="text" id="name" name="name" placeholder="Enter your name"><span class="error"><?php // echo "*".$nameErr; ?></span>
                <span id="message" style="color: red"></span>
                <br>
                Email:
                <input type="text" id="email" name="email" placeholder="Enter your email address"><span class="error"><?php //echo "*".$emailErr; ?></span>
                <span id="message1" style="color: red"></span>
                <br>
                User Name:
                <input type="text" id="uname" name="uname" placeholder="Enter your user name">
                <span id="message2" style="color: red"></span>
                <br>
                Password:
                <input type="password" id="pass" name="pass" placeholder="Enter your password"/><br>
                <span id="message3" style="color: red"></span>
                Date of Birth: <br>
            <input type="date" id="start" name="dob" value="" min="2018-01-01" max="2018-12-31">
            <span id="message5" style="color: red"></span>
            <br>
            <br>
            <br>
            <input type="submit" name="submit" value="submit"> <b></b>  <b></b><input type="submit" name="reset" value="Reset">
            <br>
            </div>     
        </div>
        </form>
    </div>
    </div>
    </div>  
<?php include("Footer.php")?>
<script>
    var login = document.forms['form'];
        login.onsubmit = function(event){
        event.preventDefault();
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (login['name'].value == "") {
        document.getElementById("message").innerHTML = "Enter Your Name.";
    }
    if (login['email'].value == "" ^ login['email'].value.match(mailformat)) {
        document.getElementById("message1").innerHTML = "Enter Your Email.";
    } 
    if (login['uname'].value == "") {
        document.getElementById("message2").innerHTML = "Enter Your User Name.";
    }
    if (login['pass'].value.length == "") {
        document.getElementById("message3").innerHTML = "Password is empty.";
    }
     
    if (login['start'].value == "") {
        document.getElementById("message5").innerHTML = "Select your Date of birth.";
    }

 }

</script>
</body>
</html>