 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-2</title>
    <style>.error {color: #FF0000;}</style>
</head>
<body>
 
<h1>Php Form Validation</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         Name: <br>
        <input type="text" name="name">
          
        <br>
        <br>
         Email: <br>
        <input type="text" name="email">
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
        <?php
$nameW=$emailW=$genderW=$eduW= " ";
$name = $email = $gender = $dob = " ";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = testinput ($_POST["name"]);
    $email = testinput ($_POST["email"]);
    $dob = testinput ($_POST["dob"]);
    $gender = testinput ($_POST["gender"]);
}

function testinput($data)
{
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}

?>

        <?php 
        echo "<h2> Your Input: </h2>";
        echo $name ;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $dob;
        echo "<br>";
        echo $gender;
        echo "<br>"
        
        ?>





    </form>
</body>
</html>