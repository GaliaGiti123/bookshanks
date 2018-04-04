<?php include './header.php'?>


<div class="book1 box"></div>
<div class="book2 box"></div>
<div class="book3 box"></div>
<div class="book4 box"></div>

<div class="hero">
	<p class="heroText">Start reading anywhere..</p>
	<div class="userAuth" id="userAuth">


<form action="registerFormHandler.php" method="post">
	<label>Username</label>
	<br>
	<input class="width100" type="text" name="username">
	<br>
	<br>
	<label>Password</label>
	<br>
	<input class="width100" type="password" name="userPassword">
	
	<br>
	<br>
	<label>Email</label>
	<br>
	<input class="width100" type="email" name="userEmail">
	<br>

	<br>
	<label>Address</label>
	<br>
	<input class="width100" type="text" name="userAddress">
	<br>
	
	<br>
	<label>Phone</label>
	<br>
	<input class="width100" type="text" name="userPhone">
	<br>
	
	<br>
	<br>
	<input class="button buttonPrimary width100" type="submit" value="Sign up!" name="registerButton" >
</form>
<br>

	</div>
</div>



<?php include './footer.php';?>
