<?php
if(isset($_GET['user_edit']) && !empty($_GET['user_edit'])){
  $id = base64_decode($_GET['user_edit']);
}else{
  header('Location: table.php');
}
?>
<?php include "header.php";?>
 

<?php
 

//  $id = $_POST['id'];
 
 $sql = "SELECT * FROM `user_table_form` WHERE id = '$id'";
 $query = mysqli_query($conn, $sql);
 
 

  
  if($query){
       while($row = mysqli_fetch_array($query)){ 
 
        $id = $row['id'];
        $name = $row['name'];
         $location = $row['location'];
         $img =    $row['img'];
         
         ?>
           
           <form action="table.php" method="post" class="my-0" enctype="multipart/form-data">
         <input type="hidden" name ="id" value="<?php echo $id ?>"/>

                <input type="text" name="name" class="form-control login-input login-inputCON" placeholder="name" value="<?php echo $name ?>"/>

                <input type="text" name="location" class="form-control login-input login-inputCON" placeholder="location" value="<?php echo $location ?>"/> <br>

                <input type="file" name="img" class="form-control login-input login-inputCON" value="<?php echo $img ?>"/> <br>



                <input type="submit" name ="update" class= "btn btn-info" value="UPDATE" />

              <a href="index.php" type="button" class="btn btn-danger"> cancel </a> 

              </form>

              <!-- update -->
              <?php
              if(isset($_POST['update'])){

                $id = $_POST['id'];
                $name = $_POST['name'];
                $location = $_POST['location'];
                $img = $_FILES['img']['name'];
                $tmp_name = $_FILES['img']['tmp_name'];
  
                $type = $_FILES['img']['type'];
                $error = $_FILES['img']['error'];
                $size = $_FILES['img']['size'];

                $sql = "UPDATE `user_table_form` SET name = '$name' , location = '$location', img = '$img' WHERE id = '$id'";

      $query = mysqli_query($conn, $sql);
      if ($query) {
        header("Location:table.php");
      }
  
              }
              
              
              
              ?>

      <?php } ?>
  <?php }
  else{?>
         <script> alert("no record has been found")</script>;
 <?php }

  ?>

  
          
<?php include "footer.php";?>
