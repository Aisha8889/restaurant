
<?php include "header.php";?>
  


  <!-- form -->
  <?php

  
if(isset($_POST['submit'])){



// $id = $_POST['id'];
$name = $_POST['name'];
$location = $_POST['location'];
$img = $_FILES['img']['name'];
$tmp_name = $_FILES['img']['tmp_name'];

$type = $_FILES['img']['type'];
$error = $_FILES['img']['error'];
$size = $_FILES['img']['size'];

if ($query == true){
$destination = 'upload/img/'.$img;

move_uploaded_file($tmp_name , $destination);
header("location:table.php");



}else{
    echo   "file upload error";
}




$sql =   "INSERT INTO `user_table_form` (`name`, `location`,`img`) VALUES ('$name', '$location','$img')";


$query = mysqli_query($conn , $sql);
}

?>



<div class="">
<form action = "table.php" method="post" class= "my-0" enctype="multipart/form-data"> 
<input type="text" name="name"  class="form-control login-input login-inputCON" placeholder="name">

<input type="text" name="location" class="form-control login-input login-inputCON" placeholder="location"> <br>
<input type="file" name="img" class="form-control login-input login-inputCON"> <br>



<input type="submit" name="submit" value="save">
</form>
</div>

           <!-- form  end-->

           <?php include "footer.php";?>
     



