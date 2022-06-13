<?php
include "header.php";
  ?>
<section class="user_table">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <h1 class="text-center text-danger">User Table</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-6">


        <table class="table table-striped table-hover table-bordered userTable">
          <thead>
            <tr>
              <th class="text-center">sl_num</th>
              <th class="text-center">user_id</th>
              <th class="text-center">user_name</th>
              <th class="text-center">user_details</th>
              <th colspan="2" class="text-center">Action</th>
            </tr>

          </thead>

          <tbody>
            <?php
            $sql = "SELECT * FROM `user_table`";
            $query = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($query)) {
              $sl_num = $row['sl_num'];
              $user_id = $row['user id'];
              $user_name = $row['user_name'];
              $user_details = $row['user_details'];

            ?>

              <tr>
                <td><?php echo $sl_num ?></td>
                <td><?php echo $user_id ?></td>
                <td><?php echo $user_name ?></td>
                <td><?php echo $user_details ?></td>
                <td>
                  <a href="Edit" class="badge bg-success py-2 px-4"> Edit</a>
                </td>
                <td>
                  <a href="Edit" class="badge bg-danger py-2 px-4"> Delete</a>

                </td>
              </tr>

            <?php } ?>
          </tbody>

        </table>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- form_table inser and select -->


 


            <!-- form -->
            <?php


            if (isset($_POST['submit'])) {



               $name = $_POST['name'];
              $location = $_POST['location'];
              $img = $_FILES['img']['name'];
              $tmp_name = $_FILES['img']['tmp_name'];

              $type = $_FILES['img']['type'];
              $error = $_FILES['img']['error'];
              $size = $_FILES['img']['size'];

              if ($query == true) {
                $destination = 'upload/img/' . $img;

                move_uploaded_file($tmp_name, $destination);
                // header("location:table.php");
              } else {
                echo   "file upload error";
              }




              $sql =   "INSERT INTO `user_table_form` (`name`, `location`,`img`) VALUES ('$name', '$location','$img')";


              $query = mysqli_query($conn, $sql);
            }

            ?>



            <div class="">
              <form action="table.php" method="post" class="my-0" enctype="multipart/form-data">
                <input type="text" name="name" class="form-control login-input login-inputCON" placeholder="name">

                <input type="text" name="location" class="form-control login-input login-inputCON" placeholder="location"> <br>
                <input type="file" name="img" class="form-control login-input login-inputCON"> <br>



                <input type="submit" name="submit" value="save">
              </form>
            </div>

            <!-- form  end-->

 









            <!-- table -->



            <a href="formData.php" class="btn btn-info"> Add Button</a>
            <table class="table table-striped table-hover table-bordered userTable">
              <thead>
                <tr>
                  <th class="text-center text-danger">id</th>
                  <th class="text-center  text-danger">name</th>
                  <th class="text-center  text-danger">location</th>
                  <th class="text-center  text-danger">image</th>
                  <th colspan="2" class="text-center text-danger">Action</th>
                </tr>

              </thead>

              <tbody>
                <?php
                $sql = "SELECT * FROM `user_table_form`";
                $query = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($query)) {
                  $id = $row['id'];
                  $name = $row['name'];
                  $location = $row['location'];
                  $img =    $row['img'];

                ?>

                  <tr>
                    <td class=" text-danger"><?php echo $id ?></td>
                    <td class=" text-danger"><?php echo $name ?></td>
                    <td class=" text-danger"><?php echo $location ?></td>
                    <td>
                      <img src="upload/img/<?php echo $img ?>" class="formIMG">
                    </td>


        <td>
          <?php
          
          $edit_id = base64_encode($id)
          ?>
          <a href="edit.php?user_edit=<?php echo $edit_id; ?>" class="badge bg-success py-2 px-4"> Edit</a>
        </td>
        <td>
          <!-- delete -->
        <form action="delete.php" method="post" class="">
            <input type="hidden" name ="id" value="<?php echo $id ?>"/>
            <input type="submit" name ="delete" class= "btn btn-danger" value="DELETE" />
            </form>
           <!-- <a href = "delete.php?deleteid <?php echo $id ?>" class="badge bg-danger py-2 px-4"> Delete</a> -->
         </td>
      </tr>

    <?php } ?>
  </tbody>

</table>
<!-- table end -->






<?php include "footer.php"; ?>