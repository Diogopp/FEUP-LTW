
<?php include_once('../templates/header.php'); ?>

<div class="login-page">
  <div>
    <form id="register" method="post" action = "register.php" >
      <input type="text" name="username" placeholder="username" required/>
      <input type="password" name="password" placeholder="password" required/>
      <input type="date" name="birthdate" placeholder="birthdate" required/>
      <input type="text" name="gender" placeholder="gender" required/>
      <button id ="login" type="submit">Register</button>
      <p class="message">Already registered? <a href="loginPage.php">Login here</a></p>

    </form>
  </div>
</div>

<?php include_once('../templates/footer.php'); ?>

<!-- idUser,name,dataNascimento , password , pathImage , sexo , dataRegisto  -->
