<?php
echo "<div class='main_nav'>
     	<h2 id='logo'>Shopping App</h2>
        <form class='main_search_form' action='main_nav.php' method='POST'>
     	<input type='text' id='main_search' name='main_search' class='main_search_txt'  placeholder='Type your product here'></input>
     	<input type='submit' id='main_btn' name='main_btn' class='main_search_btn' value='Search'></input>
        </form>
        <div class='main_login_div'>
        <a href='php/login_page.php' class='main_anchor_login'>Login</a>
        <img src=$path alt='no-preview' class='main_profile_pic'>
        </div>
        <a href='#'' class='main_seller_login'>Seller  Login </a>
        <button href='php/main_cart.php' id='main_cart_btn' class='main_cart'><i class='fas fa-shopping-cart'></i></button>
        </div>
        <div class='cart_outer_body' id='cart_outer_body_id'>
        <div class='cart_inner_body'>
            <div class='cart_close' id='cart_close_id'>
            🗙
            </div>
        </div>
     </div>";
?>
<script type="text/javascript">
   document.querySelector('#main_cart_btn').addEventListener('click' , ()=>{
      document.querySelector('#cart_outer_body_id').style.display = 'block';
   
   });
   document.querySelector('#cart_outer_body_id').addEventListener('click',()=>{
   document.querySelector('#cart_outer_body_id').style.display = 'none';
   });
   document.querySelector('#cart_close_id').addEventListener('click',()=>{
   document.querySelector('#cart_outer_body_id').style.display = 'none';
   });
   </script>