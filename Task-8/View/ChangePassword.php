<?php
include_once ('DBConn.php');
 
if ($_SERVER["REQUEST_METHOD"] =="POST") {
        $myusername = mysqli_real_escape_string($db,$_POST['name0']);
        $myusername1 = mysqli_real_escape_string($db,$_POST['name1']);
        $sql = "SELECT * FROM task61 WHERE password = '".$myusername."' limit 1";
        $result = mysqli_query($db,$sql);
        if(mysqli_num_rows($result)==1)
        {   
            $a = " ";
            $sql1 = "UPDATE `task61` SET  `password`='$myusername1'  WHERE `password`='$myusername'";
            $result = mysqli_query($db, $sql1);
            $a = "Password Change Successfully";
        }else{
            $b = " ";
            $b = "WRONG PASSWORD. PLEASE TRY AGAIN.";
        }  
}
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>Change Password</title>
</head>
<body class="col">
 
<?php include("Nav.php")?>
    <div class="container">
         
    <form  action=""class="row   body" method="post">
 
     
    <div class="col-6">
    <?php include("Options.php") ?>
    </div>
    <div class="container col-6 " >
        <div class="col" >
            <h2 style="color: green">Change Password</h2> <br>
            <span style="color: green"><?php // echo $a; ?></span>
            Old Password: <br>
            <input type="text" id="op"  name="name0" placeholder="Password">
            <span id="message" style="color: red"></span><br>
            <br>
            New Password: <br>
            <input type="text" id="np" name="name1" placeholder="Password"><br>
            <span id="message2" style="color: red"></span><br>
             
            <span style="color: red"><?php // echo $b; ?></span>
            <br>
            <input type="submit" name="submit" value="submit">  
         <br>
        </div>     
    </div>
    </form>
    </div>
<?php include("Footer.php")?>
<script>
    var v1 = document.getElementById("op");
    var v2 = document.getElementById("np");
    if (v1["op"].value != "") {
        alert("hi");
        if (v2["np"].value.length =< 8) {
            
        } else {
            document.getElementById("message2").innerHTML = "Enter Your Name.";
        }
        
    } else {
        document.getElementById("message").innerHTML = "Enter Your Name.";
    }
</script>
</body>
</html>