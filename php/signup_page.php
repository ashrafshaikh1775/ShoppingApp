<!doctype html>
<html>
<head>
	<title>SignIn</title>
	<link rel='stylesheet' type="text/css" href="../css/signup_page.css">
    <meta name="viewport" content="width=device-width ,initial-scale=1.0" charset="utf-8">
</head>
<body>
	<div class='signup_bg'>
     <div class="signup_form">
     	<form action="" method="POST">
     		<input type="text" name="username" class="signup_txt" placeholder="username"></input>
     		<input type="text" name="password" class="signup_txt"placeholder="password"></input>
     		<input type="email" name="email" class="signup_txt"placeholder="email"></input>
     	 	<input type="number" name="number" class="signup_txt"placeholder="mobile"></input>
     	 	<textarea id="address" name="address" class="signup_txt" placeholder="address"></textarea></br></br>
     	 	
     	   <input type="radio" name="radio" class="radio" value="male">Male</input>
     	   <input type="radio" name="radio" class="radio" value="female">Female</input>
     	   <input type="radio" name="radio" class="radio" value="other">Other</input>

     		<input type="submit" name="btnsub" class="signup_btn"value="SignUp"></input>
     	   </br></br>
     		<a href="login_page.php">LogIn<a/>
     	</form>
     </div>
	</div>
</body>
</html>