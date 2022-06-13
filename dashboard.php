<?php
  
  
 session_start();

 include "header.php";
 
if(!isset ($_SESSION ['is_valid']) || $_SESSION ['is_valid']!= true){
  
     
    
      header ('location: client_login.php');
}else{
  echo '<div class="alert alert-warning alert-dismissible fade show mt-4" role="alert">
    <strong>  success!</strong> LOGIN SUCCESSFUL
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}

  include "index.php";

?>

   
   </div>
 


 
  
<?php

    
   include "subFooter.php";
   include "footer.php";
 ?>