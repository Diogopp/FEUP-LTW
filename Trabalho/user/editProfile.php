<?php
  session_start();
  include(__DIR__ . '/../database/connection.php');
  include_once('../templates/header.php');
 ?>

<!--idUser,name,dataNascimento , password , pathImage , sexo , dataRegisto  -->

<div id = "profile">
  <form id="editProf" method="post" action = "editProfilePage.php">
  <?php
    try{
      $stmt = $dbh->prepare('SELECT * FROM USER WHERE idUser = ?');
      $stmt->execute(array($_SESSION['currentUser']));
      $row = $stmt->fetch();

      echo 'Name: ';
      echo "<input type='text' name='username' placeholder='username' value=".$row['name']." />";
      echo '<br>';

      echo "Birthdate: ";
      echo "<input type='date' name='birthdate' placeholder='birthdate' value=".$row['dataNascimento']."  />";
      echo '<br>';

      echo "Password: ";
      echo "<input type='password' name='password' placeholder='password' value=".$row['password']."  />";
      echo '<br>';

      echo "Gender: <br>";
      if ($row['sexo'] == "male"){
        echo '<input type="radio" name="gender" value="male" checked="checked"> Male<br>
          <input type="radio" name="gender" value="female"> Female<br>
          <input type="radio" name="gender" value="other"> Other';
      }
      if ($row['sexo'] == "female"){
        echo '<input type="radio" name="gender" value="male"> Male<br>
          <input type="radio" name="gender" value="female" checked="checked"> Female<br>
          <input type="radio" name="gender" value="other"> Other';
      }
      else if ($row['sexo'] == "other"){
        echo '<input type="radio" name="gender" value="male" > Male<br>
          <input type="radio" name="gender" value="female"> Female<br>
          <input type="radio" name="gender" value="other" checked="checked"> Other';
      }
      echo '<br>';

      echo "Extra Information: ";
      echo "<input type='text' name='extra' placeholder='Extra information...'/>";
    //  echo "<input type='text' name='extra' placeholder='Extra information...' value = ".$row['extra']."/>";
      echo '<br>';

    }
    catch (Exception $e) {
     echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
?>
  <button id ="editProfilePage" type="submit">Conclude changes</button>
</div>

<?php include_once('../templates/footer.php'); ?>
