<?php session_start(); ?>
<html>
<font size="25">
<center>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title>Homepage</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="header">
		Welcome to my page
	</div>
	<?php
	if(isset($_SESSION['valid'])) {			
		include("connection.php");					
		$result = mysqli_query($mysqli, "SELECT * FROM login");
	?>
				
		Welcome <?php echo $_SESSION['name'] ?> ! <a href='logout.php'>Logout</a><br/>
		<br/>
		
		<br/><br/>
	<?php	
	} else {
		echo "....<br/><br/><br/><br/><br/><br/><br/>";
		echo "<a href='login.php'>Login</a>
		(or)  <a href='register.php'>Register</a>";
	}
	?>
	<div id="footer">
		
	</div>
</body>
</font>
</html>