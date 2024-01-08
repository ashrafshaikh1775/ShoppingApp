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
     	<h2 id='logo'>Shopping App</h2>
        <form class='main_search_form' name='form' id='form' action='$self' method='POST' enctype='multipart/form-data'>
     	  <input type='text' id='main_search' name='main_search' class='main_search_txt'  placeholder='Type your product here'></input>
        <input type='submit' id='main_btn' name='main_btn' class='main_search_btn' value='Search'></input>
        <input type='file' name='upload_profile' id='upload_profile'></input>
        </form>
        <div class='main_login_div'>
        <a href='main_folder/login_page' class='main_anchor_login'>$uname</a>
  
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
?>
<div class='main_massage_box'>
   <div class='sub_massage_box'>
       <div id='inner_massage'></div>
      <div id='child_massage'></div>
      <button id="sub_massage_box_btn">Okay</button>
   </div>
</div>

<script type='text/javascript'>
   var uid = '<?php echo $uid ?>';
</script>
<script type='text/javascript' src='./files/navbar.js'>
</script>