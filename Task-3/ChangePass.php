<?php
 
$CurrentPass = $_POST['cpass'];
$NewPass = $_POST['npass'];
$RetypePassword = $_POST['rnpass'];
$error = " ";
$success = " ";

if(isset($_POST['submit'])){

     
        if(($CurrentPass == "password")){
              if(isset($_POST['npass']) == isset ($_POST['rnpass']) ){
                  $success =  "Password Change Successful";
              }
        }else{
            $error = "Wrong Formate...";
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
<b><p> <?php echo $error ?> </p> <p> <?php echo $success ?> </p></b>
</div>
    <form action="" method="post">
    <div >
        <div  style="position: relative;top: 150px; left: 450px;" class="container">
           <h2>Change Password</h2> 
           <br>
           <table>
               <tr>Current Password :     </tr>
               <tr > <input type="password" name="cpass"></tr><br>
               <br>
               <tr>New Password :     </tr>
               <tr> <input type="password" name="npass"></tr><br>
               <br>
               <tr>Retype New Password :     </tr>
               <tr> <input type="password" name="rnpass"></tr>
               <br>
           </table>
           <input class="btn btn-primary" type="submit" name="submit" value="Submit"> <br>

        </div>

    </div>

    </form>
     


 
     
</body>
</html>