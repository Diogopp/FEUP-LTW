<?php
  session_start();
  include(__DIR__ . '/../database/connection.php');
  include_once('../templates/header.php');
 ?>

<div id = "profileEdit">
  <form id="editProf" method="post" action = "editProfile.php">
  <?php
    try{
      $stmt = $dbh->prepare('SELECT * FROM USER WHERE idUser = ?');
      $stmt->execute(array($_SESSION['currentUser']));
      $row = $stmt->fetch();

      echo '<label>Name: </label>';
      echo "<input type='text' name='username' placeholder='username' value=".$row['name']." />";
      echo '<br>';

      echo "<label>Birthdate: </label>";
      echo "<input type='date' name='birthdate' placeholder='birthdate' value=".$row['dataNascimento']."  />";
      echo '<br>';

      echo "<label>Password: </label>";
      echo "<input type='password' name='password' placeholder='password' value=".$row['password']."  />";
      echo '<br>';
      echo "<label>Gender: </label><br>";


      if ($row['sexo'] == "male"){
        echo '<input type="radio" name="gender" value="male" checked="checked"> Male<br>
          <input type="radio" name="gender" value="female"> Female<br>
          <input type="radio" name="gender" value="other"> Other';
      }
      else if ($row['sexo'] == "female"){
        echo '<input type="radio" name="gender" value="male"> Male<br>
          <input type="radio" name="gender" value="female" checked="checked"> Female<br>
          <input type="radio" name="gender" value="other"> Other';
      }
      else if ($row['sexo'] == "other"){
        echo '<input type="radio" name="gender" value="male" > Male<br>
          <input type="radio" name="gender" value="female"> Female<br>
          <input type="radio" name="gender" value="other" checked="checked"> Other';
      }
      else{
        echo '<input type="radio" name="gender" value="male" > Male<br>
          <input type="radio" name="gender" value="female"> Female<br>
          <input type="radio" name="gender" value="other"> Other';
      }
      echo '<br>';
      echo "<label>Extra : </label>";
      echo '<input type="text" name="extra" placeholder="Extra information..." value ="'.$row['extra'].'"  />';
      echo '<br>';

    }
    catch (Exception $e) {
     echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
?>
<br>
  <button id ="editProfilePage" type="submit">Conclude changes</button>
  <br>
  <button id ='exit' type="button" onclick="window.location.href='../index.php'">Go back</button>
</div>

<?php include_once('../templates/footer.php'); ?>
