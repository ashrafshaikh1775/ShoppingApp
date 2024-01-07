<?php
if(isset($_SESSION['uname']))
{
   $uname = $_SESSION['uname'];
   $uid = $_SESSION['uid'];
}
else
{
   $uname="Login";
   $uid = 'yes';
}
echo "<div class='main_nav'>
     	<h2 id='logo'>Shopping App</h2>
        <form class='main_search_form' action='main_nav' method='POST'>
     	<input type='text' id='main_search' name='main_search' class='main_search_txt'  placeholder='Type your product here'></input>
     	<input type='submit' id='main_btn' name='main_btn' class='main_search_btn' value='Search'></input>
        </form>
        <div class='main_login_div'>
        <a href='main_folder/login_page' class='main_anchor_login'>$uname</a>
        <img src=$path alt='no-preview' class='main_profile_pic'>
        </div>
        <a href='#' class='main_seller_login'>Seller  Login </a>
        <button href='main_folder/main_cart' id='main_cart_btn' class='main_cart'><i class='fas fa-shopping-cart'></i></button>
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
         You Have Been Logout
         <div> Successfully </div>
      <button id="sub_massage_box_btn">Okay</button>
      </div>
      </div>
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

   var uname = document.querySelector('.main_anchor_login').innerText;
   var url = document.querySelector('.main_anchor_login').href;
  if(uname != 'Login')
  {
      logout = 'Logout';
     function mouseenters(){
      document.querySelector('.main_anchor_login').innerText=logout;
      }
      document.querySelector('.main_anchor_login').href ='';
      document.querySelector('.main_anchor_login').addEventListener('mouseenter' ,mouseenters);
      
      document.querySelector('.main_anchor_login').addEventListener('click' , (e)=>{
         e.preventDefault();
        var uid = '<?php echo $uid?>';
      $(document).ready(()=>{
        $.ajax({
            url:'connection/connection',
            type:'POST',
            data: {uid:uid, exe_file:'logout'},
            success: function(data){
             if(data == 'status 200')
             {
            logout = 'Login'; 
            document.querySelector('.main_anchor_login').href ='main_folder/login_page';
            uname = 'Login';
            document.querySelector('.main_massage_box').style.display='block';
             }
            } 

        });
      });
   }, { once: true } );
  
      document.querySelector('.main_anchor_login').addEventListener('mouseout' , ()=>{
      document.querySelector('.main_anchor_login').innerText = uname;
   });

   document.querySelector('#sub_massage_box_btn').addEventListener('click' , ()=>{
         document.querySelector('.main_massage_box').style.display='none';
      }, { once: true } );

  }
   </script>
