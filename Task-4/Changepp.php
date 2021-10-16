<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
          echo "Choose JPG or PNG .";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp, $file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<style>
     .body{
            background: lavender;
            margin: 20px;
            border: 1px solid black;
            padding: 5px;           
        }
</style> 
<body class="col-12">
     
    <?php include("Dashboard.php")?>
    <div class="row body">
        <br>
        <br>
    <div class="col-4">
       <br>
        <?php include('DButton.php')?>
        <br>
    </div>
    <div class="container col-8">
        <br>
        <br>
        <br>
        <div class="container col-4" style="top: 10px">
      <div class="container row">
          <br>
          <br>
             <img src="img_avatar2.png" alt="Avatar" class="image">
           <div class="overlay">
     
          </div>
         </div>
          <input type="file" name="image" /><br>
         <br>
         <input type="submit"/>
      </div>        
    </div>
    </div>
<?php include 'footer.php'?> 
</body>
 
</html>