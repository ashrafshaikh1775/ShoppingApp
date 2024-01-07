document.querySelector('#main_cart_btn').addEventListener('click', () => {
   document.querySelector('#cart_outer_body_id').style.display = 'block';

});
document.querySelector('#cart_outer_body_id').addEventListener('click', () => {
   document.querySelector('#cart_outer_body_id').style.display = 'none';
});
document.querySelector('#cart_close_id').addEventListener('click', () => {
   document.querySelector('#cart_outer_body_id').style.display = 'none';
});

var uname = document.querySelector('.main_anchor_login').innerText;
var url = document.querySelector('.main_anchor_login').href;
if (uname != 'Login') {
   logout = 'Logout';
   function mouseenters() {
      document.querySelector('.main_anchor_login').innerText = logout;
   }
   document.querySelector('.main_profile_pic').style.borderColor = 'green';
   document.querySelector('.main_anchor_login').href = '';
   document.querySelector('.main_anchor_login').addEventListener('mouseenter', mouseenters);

   document.querySelector('.main_anchor_login').addEventListener('click', (e) => {
      e.preventDefault();
      // var uid = '<?php echo $uid?>';
      $(document).ready(() => {
         $.ajax({
            url: 'connection/connection',
            type: 'POST',
            data: { uid: uid, exe_file: 'logout' },
            success: function (data) {
               if (data == 'status 200') {
                  logout = 'Login';
                  document.querySelector('.main_anchor_login').href = 'main_folder/login_page';
                  uname = 'Login';
                  document.querySelector('.main_massage_box').style.display = 'block';
                  document.querySelector('.main_profile_pic').style.borderColor = 'ghostwhite';
               }
            }

         });
      });
   }, { once: true });

   document.querySelector('.main_anchor_login').addEventListener('mouseout', () => {
      document.querySelector('.main_anchor_login').innerText = uname;
   });

   document.querySelector('#sub_massage_box_btn').addEventListener('click', () => {
      document.querySelector('.main_massage_box').style.display = 'none';
   }, { once: true });


   var form = document.getElementById('form');
   var fileSelect = document.getElementById('upload_profile');
      $('.main_profile_pic').on('click', () => {
        $('#upload_profile').click();
      $('#upload_profile').change(function(e) {
      var files = fileSelect.files;
      var formData = new FormData();
      var file = files[0]; 
      var filesize  = file.size;
       formData.append('upload_profile', file);
       formData.append('exe_file', 'upload_profile');
       formData.append('uid', uid);
            $.ajax({
            url: 'connection/connection',
            type: 'POST',
           data : formData,
           processData: false,
           contentType: false,
            success: function (data) {
               //  alert(data);
            }
         });
});
      });
}