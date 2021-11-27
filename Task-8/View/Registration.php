<?php 
require_once('Registration1.php');
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
     .error {color: #FF0000;} 

     .body{
            background: lavender;
            margin: 20px;
            border: 1px solid black;
            padding: 5px; 
        }
    #success_message{ display: none;}
</style>
<body class="col-12">
    <?php include("Navigation.php")?>
    <div class="">
    <form name="form" action=""class="body" onsubmit="return ValidationEvent()" method="post">
 
    <div class="container col-6 ">
        <div class=" " >
            <h2 style="color: green">Registration</h2> <br>
            Name:
            <input type="text" id="a1" name="name" placeholder="Enter your name"> 
            <span id="message" style="color: red"></span>
            <br>
            Email:
            <input type="text" id="a2" name="email" placeholder="Enter your email address"><br>
            <span id="message1" style="color: red"></span>
             <br>
            User Name:
            <input type="text" id="a3" name="uname" placeholder="Enter your user name">
            <span id="message2" style="color: red"></span>
            <br>
            Password:
            <input type="password" id="a4" name="pass" placeholder="Enter your password"/><br>
            <span class="error"> </span>
            Confirm Password:
            <input type="password" id="a5" name="cpass" placeholder="Enter your password"><br>
            <span id="message3" style="color: red"></span><br>
            Gender: <br>
            <input type="radio" id="a6" name="gender" value="female">Female
            <input type="radio" id="a6" name="gender" value="male">Male
            <input type="radio" id="a6" name="gender" value="other">Other
            <span id="message4" style="color: red"></span><br>
            <br>
          Date of Birth: <br>
            <input type="date" id="a7" name="dob" value="" min="2018-01-01" max="2018-12-31">
            <span id="message4" style="color: red"></span><br>
            <br>
            <br>
            <br>
            <input type="submit" name="submit" value="submit"> <b></b>  <b></b><input type="submit" name="reset" value="Reset">
            <br>
        </div>     
    </div>
    </form>
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
    if (login['pass'].value.length >= 8 ^ login["pass"].value == login["cpass"].value) {
        document.getElementById("message3").innerHTML = "Password Can Not Be Less than eight carecter.";
    }
    if (login['gender'].value == "") {
        document.getElementById("message4").innerHTML = "Select your gender.";
    }
    if (login['gender'].value == "") {
        document.getElementById("message5").innerHTML = "Select your Date of birth.";
    }

 }
</script>
</body>
</html>