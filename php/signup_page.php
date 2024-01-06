<!doctype html>
<html>
<head>
	<title>SignIn</title>
	<link rel='stylesheet' type="text/css" href="../css/signup_page.css">
    <meta name="viewport" content="width=device-width ,initial-scale=1.0" charset="utf-8">
	<script src= 'https://code.jquery.com/jquery-3.6.0.min.js' integrity= 'sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4='crossorigin='anonymous'> 
    </script>
</head>
<body>
	<div class='signup_bg'>
     <div class="signup_form">
     	<form>
     		<input type="text" name="username" id="username" class="signup_txt" placeholder="username" required></input>
     		<input type="password" name="password" id="password" class="signup_txt" placeholder="password"></input>
     		<input type="email" name="email" id="email" class="signup_txt" placeholder="email"></input>
     	 	<input type="text" name="number" id="number" class="signup_txt" placeholder="mobile" maxlength='10' onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input>
     	 	<textarea id="address" name="address" id="address" class="signup_txt" placeholder="address"></textarea></br></br>
     	 	
     	   <input type="radio" name="gender" class="radio" value="male">Male</input>
     	   <input type="radio" name="gender" class="radio" value="female">Female</input>
     	   <input type="radio" name="gender" class="radio" value="other">Other</input>

     		<input type="submit" id="btnsub" name="btnsub" class="signup_btn"value="SignUp"></input>
     	   </br></br>
     		<a href="login_page">LogIn</a>
     	</form>
     </div>
	 
	 <div class='error_message_div'>
     </div>
	</div>
      <script type='text/javascript'>
       $(document).ready(()=>{
         $('#btnsub').on('click' , (e)=>{
			e.preventDefault();
			var username = $('#username').val();
			var password = $('#password').val();
			var email = $('#email').val();
			var number = $('#number').val();
			var address = $('#address').val();
			var gender = $('input:radio[name=gender]').is(':checked');
			if(username != '' && password != '' && email != '' && number != '' && address && gender)
			{
				var serialize = $('form').serializeArray();
				 serialize.push({name: "exe_file" ,value:'signup_file'});
			$.ajax({
				url:'../connection/connection',
				type:'POST',
				data: serialize,
				success: function(data){
					error_massage(data ,3000);
					if(data='Registered')
					{
						setTimeout(()=>{
							location.href='login_page';
						},1000);
					}
				}
			});
		}
		else
		{
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