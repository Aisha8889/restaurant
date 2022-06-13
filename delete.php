 <?php include "connection.php" ; 
   

//    if(isset($_GET['deleteid'])){

//      $id = $_GET['deleteid'];
//      $sql = "DELETE FROM `user_table_form` WHERE `id` = $id";
//      $query = mysqli_query($conn, $sql);

//      if($query){
// //   echo "deleted";
//          header('location:table.php') ;          
//       }else{
//                 echo "error";
// }

//   }


  if(isset($_POST['delete'])){
     
          $id = $_POST['id']; 
         $sql = "DELETE FROM user_table_form WHERE id = '$id'";
        $query = mysqli_query($conn, $sql);

        if($query){
            header('location:table.php') ;  ?> 
            <script> alert("Deleted Successfully")</script>;
       

      <?php  }else{
                        echo "error";
        }


  }

  ?>