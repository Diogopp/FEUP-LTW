<?php
  session_start();
  include(__DIR__ . '/../database/connection.php');
  include_once('../templates/header.php');
 ?>

<!--idUser,name,dataNascimento , password , pathImage , sexo , dataRegisto  -->

<div id = "profile">
  <?php
  try{
    $stmt = $dbh->prepare('SELECT * FROM USER WHERE idUser = ?');
    $stmt->execute(array($_SESSION['currentUser']));
    $row = $stmt->fetch();

    echo "Name: ";
    echo $row['name'];
    echo '<br>';
    echo "Birthdate: ";
    $birthDate = date('d/m/Y', strtotime( $row['dataNascimento']));
    echo $birthDate;
    echo '<br>';
    echo "Gender: ";
    echo $row['sexo'];
    echo '<br>';
    echo "Register Date: ";
    $registDate = date('d/m/Y', strtotime( $row['dataRegisto']));
    echo $registDate;
    echo '<br>';
    echo "Extra information: ";
    echo "Novo campo para meter info extra";
    echo '<br>';

   }
   catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
  }
?>
  <button id='editProfile' onclick="window.location.href= 'editProfile.php'">Edit Profile</button>
</div>

<button id='exitProfile' onclick="window.location.href='../index.php'">Go back</button>

<?php include_once('../templates/footer.php'); ?>
