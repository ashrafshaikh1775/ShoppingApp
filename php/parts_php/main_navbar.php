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
        <a href='#' class='main_cart'><i class='fas fa-shopping-cart'></i></a>
     </div>";
?>