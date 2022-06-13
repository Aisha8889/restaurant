 
<!-- connection -->
<?php
$server_name = "localhost";
$user = "root";
$password = "";
$db_name ="rastaurant";


// $conn = new mysqli($server_name,$user,$password,$db_name);
$conn =  mysqli_connect($server_name,$user,$password,$db_name);


                // if ($conn->connect_error){
                // echo $conn->connect_error;
                // }else{
                //          echo       "done";
                // }

                                if (!$conn) {
                                die ("fail");
                                }
                                 