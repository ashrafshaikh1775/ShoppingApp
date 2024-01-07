<!doctype html>
<html>
<head>
	<title>Login</title>
	<link rel='stylesheet' type="text/css" href="../front_pages/login_page.css">
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
	<script type='text/javascript' src='../files/login_page.js'></script>
</body>
</html>