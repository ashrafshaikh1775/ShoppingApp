<!doctype html>
<html>
<head>
	<link rel='stylesheet' type="text/css" href="<?php echo $add_navigate_route_css?>">
    </script>
    <meta name="viewport" content="width=device-width ,initial-scale=1.0" charset="utf-8">
</head>
<body>
<ul class='navigate_route'>
      <li id='home'>Home</li>  
      <li id='view'>View</li> 
      <li id='login'>Login</li>  
      <li id='signup'>SignUp</li> 
</ul>
<script type='text/javascript'>
   var navigate_at_home_page = '<?php echo $navigate_at_home_page;?>';
</script>
<script type='text/javascript' src='<?php echo $add_navigate_route_js?>'></script>

</body>
</html>
