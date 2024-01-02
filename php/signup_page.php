<!doctype html>
<html>
<head>
	<title>SignIn</title>
	<link rel='stylesheet' type="text/css" href="../css/signup_page.css">
    <meta name="viewport" content="width=device-width ,initial-scale=1.0" charset="utf-8">
</head>
<body>
	<div class='login_bg'>
     <div class="login_form">
     	<form action="" method="POST">
     		<input type="text" name="username" class="login_txt" placeholder="username"></input>
     		<input type="text" name="password" class="login_txt"placeholder="password"></input>
     		<input type="email" name="email" class="login_txt"placeholder="email"></input>
     	 	<input type="number" name="number" class="login_txt"placeholder="mobile"></input>
     	 	<textarea id="address" name="address" class="login_txt" placeholder="address"></textarea></br></br>
     	 	
     	   <input type="radio" name="radio" class="radio" value="male">Male</input>
     	   <input type="radio" name="radio" class="radio" value="female">Female</input>
     	   <input type="radio" name="radio" class="radio" value="other">Other</input>

     		<input type="submit" name="btnsub" class="login_btn"value="SignIn"></input>
     	   </br></br>
     		<a href="login_page.php">LogIn<a/>
     	</form>
     </div>
	</div>
</body>
</html>