<script type='text/javascript'>
                  $(document).ready(function(){ 
                  $.ajax({
                  url : 'connection/connection.php',
                  type : 'POST', 
                  data : {exe_file:'load_file',find:null},
                  success : function(data){
                        $('.main_product_items').html(data); 
                  }
             })
              $('#main_btn').on('click' , function (e){
              e.preventDefault();
              var search_val = $('#main_search').val();
              $.ajax({
                  url : 'connection/connection.php',
                  type : 'POST', 
                  data : {exe_file:'submit_file' ,find:search_val},
                  success : function(data){
                       $('.main_product_items').html(data); 
                  }
             })
           });
             $('#logo').on('click' , function (e){
              // e.preventDefault();
              $.ajax({
                  url : 'connection/connection.php',
                  type : 'POST', 
                  data : {exe_file:'load_file' ,find:null},
                  success : function(data){
                       $('.main_product_items').html(data); 
                       $('#main_search').val("");
                  }
             })
           });
        }); 

        // function set_data(){
        //  for(var i = 0 ; i< 10 ; i++){
        //   var newDiv = document.createElement('div');
        //   var newImg = document.createElement('img');
        //   var priceDiv = document.createElement('div');
        //   var originalPriceDiv = document.createElement('div');
        //   var proPriceDiv = document.createElement('div');
        //   var span = document.createElement('span');

        //   var parent = document.querySelector('.main_product_items');
        //       parent.appendChild(newDiv);  
        //       parent.lastElementChild.setAttribute('class','main_page_items');
        //       parent.lastElementChild.setAttribute('onClick','view_product(this, 3)');
         
        //   var subParent = document.querySelectorAll('.main_page_items')[i];
        //       subParent.appendChild(newImg);
        //       subParent.firstElementChild.setAttribute('src','images/415Hml8-6BL.jpg');
        //       subParent.firstElementChild.setAttribute('alt','no-preview');
        //       subParent.firstElementChild.setAttribute('class','main_page_items_img');
             
        //   var newText = document.createTextNode('Shirt Branded');
        //       priceDiv.appendChild(newText);
        //       subParent.appendChild(priceDiv);
        //       subParent.firstElementChild.nextElementSibling.setAttribute('class','main_proname_div');
              

        //   var originalPriceText = document.createTextNode('₹'+'5154');
        //       originalPriceDiv.appendChild(originalPriceText);
        //       subParent.appendChild(originalPriceDiv);
        //       subParent.querySelector('.main_proname_div').nextElementSibling.setAttribute('class','main_original_proprice');

        //   var proPriceText = document.createTextNode('₹'+'5154 ');
        //       span.appendChild(document.createTextNode(' 33% off'));
        //       proPriceDiv.appendChild(proPriceText);
        //       proPriceDiv.appendChild(span);
        //       subParent.appendChild(proPriceDiv);
        //       subParent.querySelector('.main_original_proprice').nextElementSibling.setAttribute('class','main_proprice_div');
        //     }
 
        // }

         function view_product(ref , id){
                  location.href ="php/view_product.php?id="+ id;
            }

</script>
<?php
// include('connection/connection.php');
// $obj = new conn();
// $data_get = $obj->select('main_page' ,'*', null ,null ,null ,null);
// foreach($data_get as $d)
// {
// echo "<div class='main_page_items' id='$d[0]' onClick='view_product(this , $d[0])'>
//       <img src=$d[2] alt='no-preview'>
//       <div class='main_proname_div'>$d[1] </div>
//       <div class='main_original_proprice'>₹$d[4]</div>
//       <div class='main_proprice_div'>₹$d[5]  <span>$d[6]% off</span></div>
//       </div>";
// }

?>
