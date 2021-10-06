<?php 
$name = $_POST["name"];
$email = $_POST['email'];
$uname = $_POST['uname'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
 

$error = " ";
$success = " ";

if(isset($_POST['submit'])){
    if(empty($_POST["name"])){

        $error = "<b>Enter Name</b>";
    }
    elseif(empty($_POST["email"])){
        $error = "<b>Enter Email</b>";
    }
    elseif(empty($_POST["uname"])){
        $error = "<b>Enter Email</b>";
    }
    elseif(empty($_POST["pass"] == $_POST["cpass"])){
        $error = "<b>Enter Email</b>";
    }
    else{
        if(file_exists('data.json')){
            $current_data = file_get_contents('data.json');
            $array_data = json_decode($current_data, true);
            $extra = array(
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'uname' => $_POST['uname'],
                'pass' => $_POST['pass'],
                'gender' => $_POST['gender'],
                'dob' => $_POST['dob']
            );
            $array_data[] = $extra;
            $final_data = json_encode($array_data);
            if(file_put_contents('data.json', $final_data)){
                $success = "";
            }

        }else {
             $error = 'JSON File not exist';
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
    <div style="position: relative;top: 150px; left: 450px;">
    <form action="" method="post">
    <div class="container" style="input-">
        <div class="container" >
            <h2>Registration</h2> <br>
            Name:
            <input type="text"  name="name" placeholder="Enter your name"><br>
            Email:
            <input type="text" name="email" placeholder="Enter your email address"><br>
            User Name:
            <input type="text" name="uname" placeholder="Enter your user name"><br>
            Password:
            <input type="password" name="pass" placeholder="Enter your password"><br>
            Confirm Password:
            <input type="password" name="cpass" placeholder="Enter your password"><br>
            
            Gender: <br>
           <input type="radio" name="gender" value="female">Female
           <input type="radio" name="gender" value="male">Male
           <input type="radio" name="gender" value="other">Other
           <br>
           
           

          Date of Birth: <br>
         <input type="date" id="start" name="dob" value="" min="2018-01-01" max="2018-12-31">

         <br>
         <input type="submit" name="submit" value="submit"> <b></b>  <b></b><input type="submit" name="reset" value="Reset">

         <br>

        </div>
         
    </div>

    </form>

    </div>
     
     


</body>
</html>