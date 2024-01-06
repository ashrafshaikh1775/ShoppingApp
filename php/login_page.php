<!doctype html>
<html>
<head>
	<title>Login</title>
	<link rel='stylesheet' type="text/css" href="../css/login_page.css">
	<script src= 'https://code.jquery.com/jquery-3.6.0.min.js' integrity= 'sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4='crossorigin='anonymous'> 
    </script>
    <meta name="viewport" content="width=device-width ,initial-scale=1.0" charset="utf-8">
</head>
<body>
	<div class='login_bg'>
     <div class="login_form">
     	<form>
     		<input type="text" id="username" name="username" class="login_txt" placeholder="username"></input>
     		<input type="password" id="password" name="password" class="login_txt"placeholder="password"></input></br></br>
     		<input type="submit" id="btnsub" name="btnsub" class="login_btn" value="Login"></input></br></br>
     		<a href="signup_page">SignUp</a>
     	</form>
     </div>
	 <div class='error_message_div'>
     </div>
	</div>
     <script type='text/javascript'>
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
                            //  location.href='../main_page.php?username=' + data;
							location.href='../main_page';
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
	</script>
</body>
</html>