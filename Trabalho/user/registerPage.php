
<?php include_once('../templates/header.php'); ?>

<div class="login-page">
  <div>
    <form id="register" method="post" action = "register.php" >
      <input type="text" name="username" placeholder="username" required/>
      <input type="password" name="password" placeholder="password" required/>
      <input type="date" name="birthdate" placeholder="birthdate" required/>
      <input type="radio" name="gender" value="male"> Male<br>
      <input type="radio" name="gender" value="female"> Female<br>
      <input type="radio" name="gender" value="other"> Other
      <input type="text" name="extra" placeholder="Extra information..."/>
      <button id ="login" type="submit">Register</button>
      <p class="message">Already registered? <a href="loginPage.php">Login here</a></p>

    </form>
  </div>
</div>
<script type="text/javascript">

	function registerFailed()
	{
		alert("The user already exists! Try again");
	}

  <?php
		if (isset($_GET["regFailed"]))
			echo "registerFailed();";
  ?>
</script>
<?php include_once('../templates/footer.php'); ?>
