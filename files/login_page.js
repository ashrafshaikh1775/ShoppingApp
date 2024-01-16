$(document).ready(()=>{
    $('#btnsub').on('click' , (e)=>{
        e.preventDefault();
        var serialize_array = $('form').serializeArray();
            serialize_array.push({name:'exe_file' , value:'signin'});
            var username = $('#username').val();
            var password = $('#password').val();
            if(username != '' && password !='')
              {
            $.ajax({
            url: '../connection/connection',
            type:'POST',
            data: serialize_array,
            success: function(data){
                if(data == 'status 200')
                  {
                    location.replace(return_to_this_Page);
                  }
                  else
                  {
                    error_massage('Incorrect Username Or Password',3000);
                  }
            } 
        });
       }
       else{
        error_massage('All Fields are mandatory',3000);
       }
    });
    function error_massage(error,time)
 {
    document.querySelector('.error_message_div').innerText = error;
    document.querySelector('.error_message_div').style.display = 'block';
    document.querySelector('.error_message_div').style.animation = 'fadeInAnimation 1s 1 ease alternate';

    var clr = setTimeout(()=>{
    document.querySelector('.error_message_div').style.display = 'none';
 },time);
 }
});