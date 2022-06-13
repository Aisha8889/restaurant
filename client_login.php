                
                

            <?php
 session_start();
 
 

 include 'header.php' ;       
 include 'menu.php' ;       

                $login = false;
                $showError = false;

                if (isset($_POST['submit'])) {

                 $email = $_POST['email'];
                $password = $_POST['password'];
 
                $sql = "select * from signup where email='$email' and password='$password'";

                $result = mysqli_query($conn , $sql) ; 
                $num = mysqli_num_rows($result); 
                if ($num == 1) {
                $login = true;
                 
                 $_SESSION['is_valid'] = true;
                 $_SESSION['email'] = $email;
                 header('Location:dashboard.php');

                }else{
                $showError = "PLEASE CREATE AN ACCOUNT ";   
                header('Location:signup.php');    
                } 
                
                }
                

                ?>

          <?php
                if($login){
                echo '<div class="alert alert-warning alert-dismissible fade show mt-4" role="alert">
                <strong>  success!</strong> LOGIN SUCCESSFUL
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                }

                if($showError){
                echo  '<div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                <strong>error!</strong> create an account.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                }

                ?>





                
                                
                  <h2 class=" signUP_H1" >LOGIN TO OUR WEBSITE</h2>

                 


                <form action = "" method = "post" class="signUp">
                <div class="mb-3">

                <label for="exampleInputEmail1" class="form-label"> Type User Email  </label>
                <input name="email" type="email" class="form-control login-input" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"  >We'll never share your email with anyone else.</div>
                </div>

                <div class="mb-3  ">
                <label for="exampleInputPassword1" class="form-label  ">User Password</label>
                <input  name="password" type="password" class="form-control login-input" id="exampleInputPassword1">
                </div>

                

                <input type="submit" class="btn btn-primary signUpBTN" value="LOG IN " name="submit">
                </form>

          


                <?php
      include "footer.php"
      
      
      ?>




                                
                                
                