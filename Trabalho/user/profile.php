<?php
  session_start();
  include(__DIR__ . '/../database/connection.php');
 ?>

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

<!--idUser,name,dataNascimento , password , pathImage , sexo , dataRegisto  -->

<div id = "profile">
  <?php
  try{
    $stmt = $dbh->prepare('SELECT * FROM USER WHERE idUser = ?');
    $stmt->execute(array($_SESSION['currentUser']));
    $row = $stmt->fetch();

    echo $row['name'];
    echo '<br>';

   }
   catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
  }
?>
</div>

<?php include_once('../templates/footer.php'); ?>
