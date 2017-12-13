<?php
  session_start();
  include(__DIR__ . '/../database/connection.php');
  include_once('../templates/header.php');
 ?>

<div id = "profilePage">
  <?php
  try{
    $stmt = $dbh->prepare('SELECT * FROM USER WHERE idUser = ?');
    $stmt->execute(array($_SESSION['currentUser']));
    $row = $stmt->fetch();

    echo "<label>Name: </label>";
    echo $row['name'];
    echo '<br>';

    echo "<label>Birthdate: </label>";
    $birthDate = date('d/m/Y', strtotime( $row['dataNascimento']));
    echo $birthDate;
    echo '<br>';

    echo "<label>Gender: </label>";
    echo $row['sexo'];
    echo '<br>';

    echo "<label>Register Date: </label>";
    $registDate = date('d/m/Y', strtotime( $row['dataRegisto']));
    echo $registDate;
    echo '<br>';

    echo "<label>Extra: </label>";
    echo $row['extra'];
    echo '<br>';

   }
   catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
  }
?>
<br>
  <button id='editProfile' onclick="window.location.href= 'editProfilePage.php'">Edit Profile</button>
  <br>
  <button id='exit' onclick="window.location.href='../index.php'">Go back</button>
</div>

<script type="text/javascript">

	function failedChars()
	{
		alert("You can't use some of those characters!");
	}

  <?php
  if (isset($_GET["specialChars"]))
    echo "failedChars();";

  ?>
</script>

<?php include_once('../templates/footer.php'); ?>
