                  
                  

            <?php
            include "header.php";     
            include "menu.php";  

            session_start();
            
               
             
                  $showAlert = false;
                  $showError = false;

                  //  if ($_SERVER["REQUEST_METHOD"] == 'POST'){
                                    if (isset($_POST['submit'])) {

                        
                  $email = $_POST['email'];
                  $password = $_POST['password'];
                  $cpassword = $_POST['cpassword'];
                  //  echo"hi";
            //     $exists = false;
                  $existSql = "SELECT * FROM `signup` WHERE email = '$email'";
                  $result = mysqli_query($conn , $existSql) ; 
                  $numExistsRows = mysqli_num_rows($result); 

                  if($numExistsRows > 0){
                        // $exists = true;
                  $showError = " Email Already Exists";       
                  }else{
                        // $exists = false;
            
            if (($password == $cpassword )){

                  $sql = "INSERT INTO `signup` (`email`, `password` ,`dt`) VALUES ('$email', '$password', current_timestamp())";

                        $result = mysqli_query($conn , $sql) ;   
                  if ($result) {
                        $showAlert = true;
                        header('Location:client_login.php');
                  } 
                  }

                  

                  else{ 
                  $showError = "password do not match";       
                  } 
                  
                  }
            }
                  

                ?>

                 <?php
                  if($showAlert){
                  echo '<div class="alert alert-warning alert-dismissible fade show showAlert" role="alert">
                  <strong>  success!</strong> SIGN UP SUCCESSFUL AND YOU CAN LOG IN!
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                  }

                  if($showError){
                  echo  '<div class="alert alert-danger alert-dismissible fade show showAlert" role="alert">
                  <strong>error!</strong>' .  $showError . '
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                  }

                  ?>





                  
                                    
                  <h2 class=" signUP_H1" >SIGN UP TO OUR WEBSITE</h2>

                  

            <!-- <section class="formSec2">
                  <div class="container">
                        <div class="row">
                              <div class="col-xl-12"> -->
                              <form class="signUp" action = "signup.php" method = "post">
                  <div class="mb-3  ">

                  <label for="exampleInputEmail1" class="form-label"> Type User Email  </label>
                  <input name="email" maxlength="40" type="email" class="form-control login-input" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text"  >We'll never share your email with anyone else.</div>
                  </div>

                  <div class="mb-3  ">
                  <label for="exampleInputPassword1" class="form-label  ">User Password</label>
                  <input  name="password" maxlength="25" type="password" class="form-control login-input" id="exampleInputPassword1   ">
                  </div>

                  <div class="mb-3  ">
                  <label for="exampleInputPassword1" class="form-label  ">Confirm Password</label>
                  <input  name="cpassword" maxlength="25" type="password" class="form-control login-input" id="exampleInputPassword1  ">
                  </div>

                  <input type="submit" class="btn btn-primary signUpBTN" value="Sign UP" name="submit">
                  </form>
                              <!-- </div>
                        </div>
                  </div>
            </section> -->

            <?php
            
            
            
            include "footer.php";
            
            
            
            
            ?>
                  

                   






                                    
                                    
                  