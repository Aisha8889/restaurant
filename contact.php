<?php 

// session_start();

include "header.php";
 include "menu2.php";
 
  
 
  if(isset($_POST['submit'])){
  
 
 
      $name = $_POST['fname'] ;
      $email = $_POST['email'];
      $contact = $_POST['contact'];    
      $address = $_POST['address'];
      $order = $_POST['order'];

  $sql =   "INSERT INTO contact_order (name, email, contact, address, customer_order) VALUES ('$name', '$email', '$contact', '$address', '$order')";

   $query = mysqli_query($conn , $sql);

 
 

      if ($query) {
      echo  '<div class="alert alert-success mt-3" role="alert">
      Order Placed </div>';
      }else{
        echo  '<div class="alert alert-danger mt-3" role="alert">
      Order Not Placed </div>'; }
      }
        
      ?>

<section class="contactOrder"> 
<div class="container">
<div class="row">
          <div class="col-xl-12"> 
          <h2 class=" text-center text-danger conH2">Place Your Order</h2>
     
          </div>      
          </div>       
 <div class="row">
    <div class="col-xl-12">

    <form action="contact.php"  method="post" class="PlaceOrder" >
   <div class="mb-3">
     <label for="exampleInputEmail1" class="form-label form-labelCON ">Customer Name  </label>
     <input type="text" name="fname" class="form-control login-input login-inputCON"> </div>

      

     

   <div class="mb-3">
     <label for="exampleInputPassword1" class="form-label form-labelCON">Customer Email</label>
     <input type="email" name="email" class="form-control login-input login-inputCON">
   </div>

   <div class="mb-3">
     <label for="exampleInputPassword1" class="form-label form-labelCON">Customer Contact</label>
     <input type="text"  name="contact" class="form-control login-input login-inputCON"  >
   </div>

   <div class="mb-3">
     <label for="exampleInputPassword1" class="form-label form-labelCON">Customer Address</label>
     <input type="text" name="address" class="form-control login-input login-inputCON">
   </div>

   <div class="mb-3">
     <label for="exampleInputPassword1" class="form-label form-labelCON">Type Your Order Items </label>
     <input type="text" name="order" class="form-control login-input login-inputCON" >
   </div>
    
   <input type="submit" name="submit" class="btn btn-primary signUpBTN contactBTN" value="Place Order">
 
  <h6 class=" text-center text-danger conh6"> <a href="https://www.facebook.com/meherzara890">  If You Want To Know Any Information Please Contact With Us </a> </h6>
 <h6 class = "text-center text-danger conh62" >47895123589</h6>
  </div> 
  </form>

  </div>     
</div>        
</div>        
</section>


        
<?php include "footer.php";?>