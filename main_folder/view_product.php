<!doctype html>
<html>
<head>
    <title>Preview</title>
    <link rel='stylesheet' type="text/css" href="../front_pages/sub_pages1/navbar.css">
     <link rel='stylesheet' type="text/css" href="../front_pages/view_product.css">
     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.css" integrity="sha512-tx5+1LWHez1QiaXlAyDwzdBTfDjX07GMapQoFTS74wkcPMsI3So0KYmFe6EHZjI8+eSG0ljBlAQc3PQ5BTaZtQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width ,initial-scale=1.0" charset="utf-8">
</head>
<body>
    <div class="view_product_bg">
      <?php 
       $path ='../images/profile_pic/stephan.jpg';
        include("sub_folder/navbar.php");
      ?>
      <?php
     $_POST['exe_file']=null;
     include('../connection/connection.php');
     $data_get = $conn->select('main_page' ,'*', null ,'product_id='. $_GET['id'] ,null ,null);
     ?>
      <div class="view_product_div">
        <div class="view_product_other_img">
            <?php
           $img_url =  $data_get[0][2];
            for($i=0; $i<=10;$i++){
             echo "<div class='view_product_other_small_img'>
                 <img src=../$img_url>
              </div>";
              }
            ?>
         </div>
       <div class="view_product_img" >
         <img src=<?php echo '../'.$data_get[0][2]?>>
       </div>
       <div class="view_product_details">
        <div class="view_product_name">
            <span><?php echo $data_get[0][1]?></span>
        </div>
        <h1>
            ₹<?php echo $data_get[0][5]?>
            <div>
            ₹<?php echo $data_get[0][4]?>
           </div>
               <span>
              <?php echo $data_get[0][6]?>% off
              </span>
        </h1>
          <div class="view_product_description">
             <h1>
                Details:
             </h1>
        <?php echo $data_get[0][3]?>
       </div>
        </div>
     <div class="view_product_group">
     <input type="submit" name="add_to_cart" class="view_product_add_cart" value="Add Cart"></input>
      <input type="submit" name="order" class="view_product_order" value="Order"></input>
      </div>
      </div>
    </div>

</body>
</html>