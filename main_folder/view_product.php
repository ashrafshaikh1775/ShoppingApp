<!doctype html>
<html>
<?php
$_POST['exe_file'] = null;
include('../connection/connection.php');
?>

<head>
  <title>Preview</title>
  <link rel='stylesheet' type="text/css" href="../front_pages/sub_pages1/navbar.css">
  <link rel='stylesheet' type="text/css" href="../front_pages/sub_pages2/view_product_responsive.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.css" integrity="sha512-tx5+1LWHez1QiaXlAyDwzdBTfDjX07GMapQoFTS74wkcPMsI3So0KYmFe6EHZjI8+eSG0ljBlAQc3PQ5BTaZtQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src='https://code.jquery.com/jquery-3.6.0.min.js' integrity='sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=' crossorigin='anonymous'>
  </script>
  <meta name="viewport" content="width=device-width ,initial-scale=1.0" charset="utf-8">
</head>

<body>
  <div class="view_product_bg">
    <?php
    if (isset($_SESSION['image_name'])) {
      if ($_SESSION['image_name'] != '') {
        $path = '../images/profile_pic/' . $_SESSION['image_name'];
      } else {
        $path = '../images/default_pic/default_pic';
      }
    } else {
      $path = '../images/default_pic/default_pic';
    }
    if (isset($_SESSION['loged_in'])) {
      $loged_in = $_SESSION['loged_in'];
      $_SESSION['loged_in'] = '';
    } else {
      $_SESSION['loged_in'] = '';
    }
    $src = '../files/navbar.js';
    $go_to_login_Page = 'login_page';
    $_SESSION['return_to_this_Page'] = './view_product';
    $img_default_path = '../images/default_pic/default_pic';
    $Path_to_set_img = '../images/profile_pic/';
    $go_to_cnn = '../connection/connection';
    $add_navigate_route = 'sub_folder/navigate_route_page.php';
    $add_navigate_route_css = '../front_pages/sub_pages1/navigate_route_page.css';
    $add_navigate_route_js = '../files/navigate_route_page.js';
    $navigate_at_home_page = '../index';
    $name_of_page = 'view_product';
    $return_to_this_Page=$_SESSION['return_to_this_Page'];
    include("sub_folder/navbar.php");
    $data_get = $conn->select('main_page', '*', null, 'product_id=' . $_SESSION['found_id'], null, null);
    ?>
    <div class="view_product_div">
      <div class="view_product_other_img">
        <?php
        $img_url =  $data_get[0][2];
        for ($i = 0; $i <= 10; $i++) {
          echo "<div class='view_product_other_small_img'>
                 <img src=../$img_url>
              </div>";
        }
        ?>
      </div>
      <div class="view_product_img">
        <img src=<?php echo '../' . $data_get[0][2] ?>>
      </div>
      <div class="view_product_details">
        <div class="view_product_name">
          <span><?php echo $data_get[0][1] ?></span>
        </div>
        <h1>
          ₹<?php echo $data_get[0][5] ?>
          <div>
            ₹<?php echo $data_get[0][4] ?>
          </div>
          <span>
            <?php echo $data_get[0][6] ?>% off
          </span>
        </h1>
        <h1 id='h1_detail'>
            Details:
          </h1>
        <div class="view_product_description">
          <?php echo $data_get[0][3] ?>
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