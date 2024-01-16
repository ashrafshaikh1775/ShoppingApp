document.querySelector('#main_cart_btn').addEventListener('click', (e) => open_close_cart(e, 'block', 'null'));
document.querySelector('#cart_outer_body_id').addEventListener('click', (e) => open_close_cart(e, 'none', 'null'));
document.querySelector('#cart_close_id').addEventListener('click', (e) => open_close_cart(e, 'none', 'null'));
document.querySelectorAll('.left_sidebar_items_list li')[1].addEventListener('click', (e) => open_close_cart(e, 'block', 'none'));
function open_close_cart(e, display_1, display_2) {
   document.querySelector('#cart_outer_body_id').style.display = display_1;
   if (display_2 == 'none' || display_2 == 'block') {
      document.querySelector('#left_side_navbar').style.display = display_2;
   }
}

document.querySelector('.cart_inner_body').addEventListener('click', (e) => {
   e.stopPropagation();
});

var uname = document.querySelector('.main_anchor_login').innerText;
var url = document.querySelector('.main_anchor_login').href;

if (uname != 'Login') {
   logout = 'Logout';

   document.querySelector('.main_anchor_login').addEventListener('mouseenter', (e) => mouseenters(e, '.main_anchor_login'));
   document.querySelector('.left_sidebar_anchor_login').addEventListener('mouseenter', (e) => mouseenters(e, '.left_sidebar_anchor_login'));

   function mouseenters(e, tag_name) {
      document.querySelector(tag_name).innerText = logout;
   }

   document.querySelector('.main_profile_pic').style.borderColor = 'green';
   document.querySelector('.main_anchor_login').href = '';

   document.querySelector('.left_sidebar_profile_pic').style.borderColor = 'green';
   document.querySelector('.left_sidebar_anchor_login').href = '';

   document.querySelector('.main_anchor_login').addEventListener('click', (e) => logout_user(e));
   document.querySelector('.left_sidebar_anchor_login').addEventListener('click', (e) => logout_user(e));

   function logout_user(e) {
      e.preventDefault();
      $(document).ready(() => {
         $.ajax({
            url: go_to_cnn,
            type: 'POST',
            data: { uid: uid, exe_file: 'logout' },
            success: function (data) {
               if (data == 'status 200') {
                  logout = 'Login';
                  uname = 'Login';
                  document.querySelector('.main_profile_pic').setAttribute('src', img_default_path);
                  document.querySelector('.left_sidebar_profile_pic').setAttribute('src',img_default_path);

                  mouseout(e, '.main_anchor_login');
                  mouseout(e, '.left_sidebar_anchor_login');

                  document.querySelector('#inner_massage').innerText = 'You Have Been Logout';
                  document.querySelector('#child_massage').innerText = 'Successfully';
                  document.querySelector('.main_massage_box').style.display = 'block';
                  document.querySelector('.main_profile_pic').style.borderColor = 'ghostwhite';
                  document.querySelector('.left_sidebar_profile_pic').style.borderColor = 'ghostwhite';
               } else {
                  if (logout == 'Login') {
                     location.href = go_to_login_Page;
                  } else {
                     document.querySelector('#inner_massage').innerText = "Coudn't Logout";
                     document.querySelector('#child_massage').innerText = ' Try Again';
                     document.querySelector('.main_massage_box').style.display = 'block';
                  }
               }
            }

         });
      });
   }


   document.querySelector('.main_anchor_login').addEventListener('mouseout', (e) => mouseout(e, '.main_anchor_login'));
   document.querySelector('.left_sidebar_anchor_login').addEventListener('mouseout', (e) => mouseout(e, '.left_sidebar_anchor_login'));

   function mouseout(e, tag_name) {
      document.querySelector(tag_name).innerText = uname;
   }

   document.querySelector('#sub_massage_box_btn').addEventListener('click', () => {
      document.querySelector('.main_massage_box').style.display = 'none';
   });


   var form = document.getElementById('form');
   var fileSelect = document.getElementById('upload_profile');

   document.querySelector('.main_profile_pic').addEventListener('click', (event) => update_pic(event));
   document.querySelector('.left_sidebar_profile_pic').addEventListener('click', (event) => update_pic(event));

   function update_pic(event) {
      if (uname != 'Login') {
      $('#upload_profile').click();
      // $('#upload_profile').change(function(e) {
      document.querySelector('#upload_profile').addEventListener('change', function (e) {
         var files = fileSelect.files;
         var formData = new FormData();
         var file = files[0];
         var filename = file.name;
         var filename = filename.split('.');
         formData.append('upload_profile', file);
         formData.append('exe_file', 'upload_profile');
         formData.append('uid', uid);
         $.ajax({
            url: go_to_cnn,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (data) {
               if (data == 'status 200') {
                  document.querySelector('.main_profile_pic').setAttribute('src', Path_to_set_img + filename[0]);
                  document.querySelector('.left_sidebar_profile_pic').setAttribute('src', Path_to_set_img + filename[0]);
               }
               else if (data == 'status 400' || data == 'status 500' || data == 'status 600') {
                  document.querySelector('#inner_massage').innerText = "Can't Upload";
                  document.querySelector('#child_massage').innerText = "Please Try Again";
                  document.querySelector('.main_massage_box').style.display = 'block';
               }
               $("#upload_profile").val('');
            }
         });
      }, { once: true });
   }
   }
}


document.querySelector('.left_sidebar_icon').addEventListener('click', () => {
   document.querySelector('#left_side_navbar').style.display = 'block';
});
document.querySelector('#left_side_navbar').addEventListener('click', () => {
   document.querySelector('#left_side_navbar').style.display = 'none';
});
document.querySelector('#close_left_side_navbar').addEventListener('click', () => {
   document.querySelector('#left_side_navbar').style.display = 'none';
});
document.querySelector('#left_side_navbar_inner_container').addEventListener('click', (e) => {
   e.stopPropagation();
});
window.addEventListener('resize',(e)=>{    
   if(window.innerWidth > 1000){
     document.querySelector('#left_side_navbar').style.display='none';
       }
      })

