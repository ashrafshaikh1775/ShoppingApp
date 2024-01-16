<?php
if (isset($_SESSION['uname'])) {
   $uname = $_SESSION['uname'];
   $uid = $_SESSION['uid'];
} else {
   $uname = "Login";
   $uid = 'yes';
}
$self = $_SERVER['PHP_SELF'];
echo "<div class='main_nav'>
      <div class='left_sidebar_icon'><i class='fa-solid fa-bars'></i></div>
     	<h2 id='logo'>Shopping App</h2>
        <form class='main_search_form' name='form' id='form' action='$self' method='POST' enctype='multipart/form-data'>
     	  <input type='text' id='main_search' name='main_search' class='main_search_txt'  placeholder='Type your product here'></input>
        <input type='submit' id='main_btn' name='main_btn' class='main_search_btn' value='Search'></input>
        <input type='file' name='upload_profile' id='upload_profile'></input>
        </form>
        <div class='main_login_div'>
        <a href='$go_to_login_Page' class='main_anchor_login'>$uname</a>
  
        <img src=$path alt='upload profile' class='main_profile_pic'>
        </div>
        <a href='#' class='main_seller_login'>Seller  Login </a>
        <button id='main_cart_btn' class='main_cart'><i class='fas fa-shopping-cart'></i></button>
        </div>
        <div class='cart_outer_body' id='cart_outer_body_id'>
        <div class='cart_inner_body'>
            <div class='cart_close' id='cart_close_id'>
            🗙
            </div>
        </div>
     </div>";
   include($add_navigate_route);
?>

<div class='main_massage_box'>
   <div class='sub_massage_box'>
      <div id='inner_massage'></div>
      <div id='child_massage'></div>
      <button id="sub_massage_box_btn">Okay</button>
   </div>
</div>
<div id='left_side_navbar'>
   <div id='left_side_navbar_inner_container'>
      <div id='close_left_side_navbar'>
         🗙
      </div>
      <div class='left_sidebar_login_div'>
         <img src='<?php echo $path ?>' alt='upload profile' class='left_sidebar_profile_pic'>
         <a href='<?php echo $go_to_login_Page; ?>' class='left_sidebar_anchor_login'><?php echo $uname ?></a>
      </div>
      <ul class='left_sidebar_items_list'>
         <li>Seller Login</li>
         <li>Cart <i class='fas fa-shopping-cart'></i></li>
      </ul>
   </div>
</div>
<script type='text/javascript'>
   var uid = '<?php echo $uid ?>';
   var img_default_path = '<?php echo $img_default_path; ?>';
   var go_to_cnn = '<?php echo $go_to_cnn; ?>';
   var Path_to_set_img = '<?php echo $Path_to_set_img; ?>';
   var go_to_login_Page = '<?php echo $go_to_login_Page; ?>';
</script>
<script type='text/javascript' src=<?php echo $src ?>></script>