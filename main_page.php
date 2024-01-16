<!doctype html>
<html>
<?php
session_start();
?>

<head>
  <title>Menu</title>
  <link rel='stylesheet' type="text/css" href="front_pages/sub_pages2/main_page_responsive.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.css" integrity="sha512-tx5+1LWHez1QiaXlAyDwzdBTfDjX07GMapQoFTS74wkcPMsI3So0KYmFe6EHZjI8+eSG0ljBlAQc3PQ5BTaZtQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src='https://code.jquery.com/jquery-3.6.0.min.js' integrity='sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=' crossorigin='anonymous'>
  </script>
  <meta name="viewport" content="width=device-width ,initial-scale=1.0" charset="utf-8">
</head>

<body>
  <div class="main_bg">
    <?php
    if (isset($_SESSION['image_name'])) {
      if ($_SESSION['image_name'] != '') {
        $path = 'images/profile_pic/' . $_SESSION['image_name'];
      } else {
        $path = 'images/default_pic/default_pic';
      }
    } else {
      $path = 'images/default_pic/default_pic';
    }
    if (isset($_SESSION['loged_in'])) {
      $loged_in = $_SESSION['loged_in'];
      $_SESSION['loged_in'] = '';
    } else {
      $_SESSION['loged_in'] = '';
    }
    $src = './files/navbar.js';
    $go_to_login_Page = 'main_folder/login_page';
    $_SESSION['return_to_this_Page'] = '../main_page';
    $img_default_path = 'images/default_pic/default_pic';
    $Path_to_set_img = 'images/profile_pic/';
    $go_to_cnn = 'connection/connection';
    $add_navigate_route = 'navigate_route_page.php';
    $add_navigate_route_css = 'front_pages/sub_pages1/navigate_route_page.css';
    $add_navigate_route_js = 'files/navigate_route_page.js';
    $navigate_at_home_page = 'main_page';
    include("main_folder/sub_folder/navbar.php");

    ?>
    <div class="main_product_items" id="main_product_items">
      <script type='text/javascript' src='files/product_items.js'></script>
      <script>
        navigate_links('none', 'none', 'none');
        set_path_to_navigate_links('view_product');
        var loged_in = '<?php echo $loged_in; ?>';
        if (loged_in != '') {
          document.querySelector('#inner_massage').innerText = ' You are loged in';
          document.querySelector('#child_massage').innerText = ' Successfully';
          document.querySelector('.main_massage_box').style.display = 'block';
        }
      </script>
      <?php

      if (isset($_SESSION['items_id'])) {
        if (isset($_POST['id'])) {
          $_SESSION['found_id'] = $_SESSION['items_id'][$_POST['id']];
        }
      }
      ?>
    </div>
  </div>
</body>

</html>