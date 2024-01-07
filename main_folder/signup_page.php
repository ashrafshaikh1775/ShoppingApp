<!doctype html>
<html>
<head>
	<title>SignIn</title>
	<link rel='stylesheet' type="text/css" href="../front_pages/signup_page.css">
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
	<script type='text/javascript'  src='../files/signup_page.js'></script>
</body>
</html>