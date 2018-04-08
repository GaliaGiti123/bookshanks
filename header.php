<?php include './dbconnect.php'?>
<?php 
	setcookie("usernameCookie", "", time()+30*24*60*60);
?>


<!DOCTYPE html>
<html>

<head>
	<title>BookWorm - An online bookshop</title>
	<?php include './makeGrid.php' ?>
	
</head>

<body>
	<div class="header">
		<div class="logo"> </div>

		<div class="nav">
			<ul>
				<li> <a href="index.php">Home</a></li>
				<li><a href="askToSignup.php">Books</a></li>
				<li><a href="register.php">Sign up</a></li>
				
			</ul>
		</div>

	</div>
