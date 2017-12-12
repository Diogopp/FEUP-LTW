
<?php include_once('../templates/header.php'); ?>

<div class="login-page">
  <div>
    <form id="register" method="post" action = "register.php" >
      <div class="block">
      <label>Username: </label>
      <input type="text" name="username" pattern="[a-zA-Z][\w]{2,10}[a-zA-Z]" placeholder="a-zA-Z bet:4-12" required/>
      </div>
      <div class="block">
      <label>Password: </label>
      <input type="password" pattern="(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z])(?=.*[\+\*])([\w\+\*]){4,}(?!\1)[\w\+\*]" name="password" placeholder="a-zA-Z0-9(+ ou *) minCh:5" required/>
      </div>
      <div class="block">
      <label>Birthdate: </label>
      <input type="date" name="birthdate" required/>
      </div>
      <div class="block">
      <label>Gender: </label>
      <br>
      <input type="radio" name="gender" value="male"> Male<br>
      <input type="radio" name="gender" value="female"> Female<br>
      <input type="radio" name="gender" value="other"> Other
      </div>
      <div class="block">
      <label>Extra: </label>
      <input type="text" name="extra" placeholder="Extra information..."/>
      </div>
      <button id ="signup" type="submit">Register</button>
      <p class="message">Already registered? <a href="../">Login here</a></p>
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
