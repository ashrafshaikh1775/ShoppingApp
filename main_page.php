<!doctype html>
<html>
<?php
session_start();
?>
<head>
	<title>Menu</title>
	<link rel='stylesheet' type="text/css" href="front_pages/sub_pages2/main_page_responsive.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.css" integrity="sha512-tx5+1LWHez1QiaXlAyDwzdBTfDjX07GMapQoFTS74wkcPMsI3So0KYmFe6EHZjI8+eSG0ljBlAQc3PQ5BTaZtQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src= 'https://code.jquery.com/jquery-3.6.0.min.js' integrity= 'sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4='crossorigin='anonymous'> 
  </script>
  <meta name="viewport" content="width=device-width ,initial-scale=1.0" charset="utf-8">
</head>
<body>
	<div class="main_bg">
      <?php 
        $path ='images/profile_pic/stephan.jpg';
        include("main_folder/sub_folder/navbar.php");
      ?>
     <div class="main_product_items" id="main_product_items">
      <?php 
        include("main_folder/main_product_items.php");
      ?>
     </div>
	</div>
</body>
</html>
