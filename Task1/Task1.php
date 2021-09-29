<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
 
$nameErr = $emailErr = $genderErr = $dobErr = "";
$name = $email = $gender = $degree = $dob = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Wrong name formate";
     
  } 
  if(!preg_match ("/^[a-zA-Z-' ]*$/", $name) ) {
    $nameErr = "Onely letters and white space are allowed";
  
  }
  else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["dob"])) {
    $website = "";
  } else {
    $website = test_input($_POST["dob"]);
  }

  if (empty($_POST["degree"])) {
    $degree = "atlist 2";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="container " style=" background-color: gray;">
<h1>Php Form Validation</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         Name: <br>
        <input type="text" name="name">
        <span class="error"> *<?php echo $nameErr;  ?></span>
        <br>
        <br>
         Email: <br>
        <input type="text" name="email">
        <span class="error"> * <?php  echo $emailErr ?></span>
        <br>
        <br>
         Date of Birth: <br>
         <input type="date" id="start" name="dob" value="" min="2018-01-01" max="2018-12-31">

        <br>
        <br> 
         Gender: <br>
        <br>
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <br>
        <br>
         Degree: <br>
         <input type="checkbox" name="SSC" value="SSC">SSC
         <input type="checkbox" name="HSC" value="HSC">HSC
         <input type="checkbox" name="BSc" value="BSc">BSc
         <input type="checkbox" name="MSc" value="MSc">MSc
         <br>
         <br>
         Blood Group: <br>
          <select>
            <option name="A+">A +</option>
            <option name="A-">A -</option>
            <option name="B+">B +</option>
            <option name="B-">B -</option>
            <option name="AB+">AB +</option>
            <option name="AB-">AB -</option>
            <option name="O+">O +</option>
            <option name="O-">O -</option>
        </select>
        <br>
        <br>

        <input type="submit" value="submit" name="submit">
    </form>
    <?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
"<br>";
echo $degree;
"<br>";
?>

</div>
 
 

</body>
</html>