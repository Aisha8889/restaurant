

<?php

include "header.php";
include "menu2.php";
?>

 






 

   <section class="aboutSec">
      <div class="container-fluid">
         <div class="row">
               <div class="col-xl-12 aboutBanner ">
                     <h1 class="text-center d-flex text-danger">Restaurant   </h1>         
                     <h5 class="text-center d-flex ">Best Menu Items </h5>         
               </div>
      </div>
      </div>
</section>



  <!-- pizza_card start -->

<section class="foodSec pizza">
   <div class="container-fluid">
      <div class="row">
         <div class="col-xl-12 pizzaPart  ">
            <h1 class="text-center d-flex ">PIZZA MENU</h1>
            <h5 class="text-center d-flex text-danger ">BEST SELECTION</h5>
            </div>
         </div>
         <div class="row my-4">

 
       <?php
       $sql = "SELECT * FROM `pizza_card`";
       $query = mysqli_query($conn , $sql);
       $num = mysqli_num_rows($query);

      //  if($query){
         if($num > 0){
       while ($row = mysqli_fetch_assoc($query)){   
     $sl_num = $row['sl_num'];
     $pizza_img = $row['img'];
     $pizza_title = $row['title'];
     $pizza_description = $row['description'];
     $pizza_r_pp = $row['regular_size'];
     $pizza_m_pp = $row['medium_size'];

     ?>

      <!-- <div class="row my-4"> -->
         <div class="col-xl-6 pizzaPic">
         <a href="contact.php">
   <img src="<?php echo  $pizza_img ?>" alt=""> </a>
         </div>
         <div class="col-xl-6 pizzaDTL">
            <!-- <h2><?php  echo $sl_num  ?></h2> -->
            <h1> <?php echo  $pizza_title ?></h1>
            <i><?php echo   $pizza_description ?></i>
            <button>Regular Size</button>
            <i> <?php echo  $pizza_r_pp ?></i>
            <button>Medium Size</button>
            <i text-color="orange"><?php echo  $pizza_m_pp ?></i>
            <a href="contact.php"  <?php  echo "food id" . $sl_num  ?>    class="btn btn-danger pizza_btn"> ORDER NOW </a>

            

         </div>
         
      <!-- </div> -->

    
         

  <?Php }} ?>
       
   
  <!-- pizza_card  end-->
<?php

 $sql = "SELECT * FROM `category_card`";
 $query = mysqli_query($conn , $sql);
  
 ?>

 <section class="pastaSec foodSec"> 
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <h1 class="text-center text-danger">ORDER PASTA</h1>
               </div>
            </div>
         <div class="row">
            <?php
 while ($row = mysqli_fetch_assoc($query)){   

   $cat_id = $row['sl_num'];
   $cat_name = $row['category_name'];
   $cat_description = $row['category_description'];
   $cat_img = $row['img'];

   if ($cat_img == '') { ?>

        <div class="cat_img" >this food is not available</div> ;
     <?php

      }else{

      

    
      ?>
          <div class="col-xl-4 pastahead">
         <div class="card pastacard">
         <a href="contact.php"  <?php echo $cat_id?>>
       <img src = <?php echo $cat_img ?>> </a>
      <div class ="card-body pstabody">
      <h2> <?php echo  $cat_name ?> </h2>
      <i>$35</i>
      <p> <?php echo  $cat_description ?> </p>
      </div>
      </div>
       </div>
       

 <?php }}
 ?>


<!-- gallery start -->
 
<section class="gallery_sec">
<div class="container">
   <div class="row">
      <div class="col-xl-12">
         <h1 class="text-center text-danger bold text mb-3"> Food Category </h1>
      </div>
   </div>
<div class="row">
<div class="col-xl-4 gallery_btn">
       <button class ="btn btn-primary galBtnOne galBtnCmn"> Bengali Food </button>

      <button class = "btn  btn-primary  galBtn2 galBtnCmn"> chiness Food </button>
      <!-- <a href="gallery1.php" class = "btn"> Chinese Food  </a>
      <a href="gallery1.php" class = "btn"> Chinese Food  </a>
      <a href="gallery1.php" class = "btn"> Chinese Food  </a>
      <a href="gallery1.php" class = "btn"> Chinese Food  </a>
      <a href="gallery1.php" class = "btn"> Chinese Food  </a>
      <a href="gallery1.php" class = "btn"> Chinese Food  </a>
      <a href="gallery1.php" class = "btn"> Chinese Food  </a> -->
    </div>
    </div>
    </div>
 </section>
 
   <?php

$sql = "SELECT * FROM `gallery`";
$query = mysqli_query($conn , $sql);

?>

<section class="gallery_sec_img">
<div class="container">
<div class = "row gal_img_row "> 


 <?php

while ($row = mysqli_fetch_assoc($query)){   

   $id = $row['id'];
   $gal_img = $row['gal_img'];
   $gal_img2 = $row['gal_img2'];
   $gal_title = $row['gal_title'];
   $food_name = $row['food_name'];
   $individual_price = $row['individual_price'];
   $food_rating = $row['food_rating'];
   $avaibility = $row['avaibility'];

    
      ?>


       
 
          <div class="col-xl-3  ">
          <a href="contact.php"> <img class = "gal_img" src = <?php echo $gal_img ?>></a>
       <h5 class="text-center text-danger"> <?php echo $food_name ?> </h5>
       <h6  class="text-center text-danger"> <?php echo $individual_price ?> </h6>
       <!-- <h3  class="text-center text-danger"> <?php echo $food_rating ?> </h3>
       <h5  class="text-center text-danger"> <?php echo $avaibility ?> </h5> -->
  
        </div>

       <div class="col-xl-3    ">
 
       <a href="contact.php"> <img  class = "gal_img" src = <?php echo $gal_title ?>></a>
        <h5  class="text-center text-danger"> <?php echo $food_name ?> </h5>
       <h6  class="text-center text-danger"> <?php echo $individual_price ?> </h6>
       <!-- <h3  class="text-center text-danger"> <?php echo $food_rating ?> </h3>
       <h5  class="text-center text-danger"> <?php echo $avaibility ?> </h5> -->
       </div>

       <div class="col-xl-3    ">
 
       <a href="contact.php"> <img  class = "gal_img" src = <?php echo $gal_img2 ?>></a>
        <h5  class="text-center text-danger"> <?php echo $food_name ?> </h5>
       <h6  class="text-center text-danger"> <?php echo $individual_price ?> </h6>
       <!-- <h3  class="text-center text-danger"> <?php echo $food_rating ?> </h3>
       <h5  class="text-center text-danger"> <?php echo $avaibility ?> </h5> -->
       </div>



        
       

 <?php } ?>

     </div>
     </div>
 </section>

    
 
<!-- gallery end -->


<!-- new gallery start -->


<?php

$sql = "SELECT * FROM `gallery_parttwo`";
$query = mysqli_query($conn , $sql);

?>

<section class="gallery_sec_img">
<div class="container">
<div class = "row gal_img_row2 "> 


 <?php

while ($row = mysqli_fetch_assoc($query)){   

   $id = $row['id'];
   $gal_img = $row['gal_img'];
   $gal_img2 = $row['gal_img2'];
   $gal_title = $row['gal_title'];
    
      ?>

          <div class="col-xl-3  ">
       <img class = "gal_img" src = <?php echo $gal_img ?>>
  
        </div>

       <div class="col-xl-3    ">
 
        <img  class = "gal_img" src = <?php echo $gal_title ?>>
       </div>

       <div class="col-xl-3    ">
 
        <img  class = "gal_img" src = <?php echo $gal_img2 ?>>
       </div>

       <?php } ?>

     </div>
     </div>
 </section>


<!-- new gallery end -->


<?php include "footer.php"; ?>
 
 
 



        
       

  
 
   
        



          
     
    
 


       
      



    
     


 


 

         

  