<!doctype html>
<html>
<head>
	<title>Menu</title>
	<link rel='stylesheet' type="text/css" href="css/responsive/main_page_responsive.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.css" integrity="sha512-tx5+1LWHez1QiaXlAyDwzdBTfDjX07GMapQoFTS74wkcPMsI3So0KYmFe6EHZjI8+eSG0ljBlAQc3PQ5BTaZtQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width ,initial-scale=1.0" charset="utf-8">
</head>
<body>
	<div class="main_bg">
      <?php 
        $path ='images/profile_pic/stephan.jpg';
        include("php/parts_php/main_navbar.php");
      ?>
     <div class="main_product_items" id="main_product_items">
      <?php 
        include("php/main_product_items.php");
      ?>
     </div>
       <span>Hello</span>
	</div>
</body>
</html>
