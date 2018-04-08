<?php include './header.php'?>
<?php include './functions.php'?>

<div class="book1 box"></div>
<div class="book2 box"></div>
<div class="book3 box"></div>
<div class="book4 box"></div>



<div class="hero">
	<p class="heroText">Start reading anywhere..</p>
	<div class="userAuth" id="userAuth">
		<form action="loginHandler.php" method="post">
			<label>Username  </label>
			<br>
			<input class="width100" type="text" name="username">
			<br>
			<br>
			<label>Password</label>
			<br>
			<input class="width100" type="password" name="password">
			<br>
			<br>
			<input name="loginButton" class="button buttonPrimary width100" type="submit" value="Log in!">
		</form>
		<br>

		<p class="signupMessage">Still not a member?
			<a href="./register.php">
				Sign up now!
			</a>
		</p>

	</div>
</div>


<?php include './footer.php';?>
