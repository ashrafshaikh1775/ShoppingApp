$(document).ready(function(){ 
    $.ajax({
    url : 'connection/connection',
    type : 'POST', 
    data : {exe_file:'load_file',find:null},
    success : function(data){
          $('.main_product_items').html(data); 
    }
});
$('#main_btn').on('click' , function (e){
e.preventDefault();
var search_val = $('#main_search').val();
$.ajax({
    url : 'connection/connection',
    type : 'POST', 
    data : {exe_file:'submit_file' ,find:search_val},
    success : function(data){
         $('.main_product_items').html(data); 
    }
});
});
$('#logo').on('click' , function (e){
$.ajax({
    url : 'connection/connection',
    type : 'POST', 
    data : {exe_file:'load_file' ,find:null},
    success : function(data){
         $('.main_product_items').html(data); 
         $('#main_search').val("");
    }
});
});
}); 
function view_product(ref , id){
    // $(document).ready(function(){ 
    $.ajax({
        url : 'main_page',
        type : 'POST',
        data : {id}
    });
    location.href ="main_folder/view_product";
// }); 
    // alert('hy');
    // location.href ="main_folder/view_product?id="+ id;
}