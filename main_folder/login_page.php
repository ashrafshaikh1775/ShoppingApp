<!doctype html>
<html>
<?php
session_start();
?>
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
	<?php
	$return_to_this_Page = $_SESSION['return_to_this_Page'];
	$add_navigate_route = 'sub_folder/navigate_route_page.php';
    $add_navigate_route_css = '../front_pages/sub_pages1/navigate_route_page.css';
    $add_navigate_route_js = '../files/navigate_route_page.js';
    $navigate_at_home_page = '../main_page';
	$name_of_page = 'login';
	include($add_navigate_route);
	?>
	<script>
	    var return_to_this_Page = "<?php echo $return_to_this_Page;?>";
	</script>
	<script type='text/javascript' src='../files/login_page.js'></script>
</body>
</html>