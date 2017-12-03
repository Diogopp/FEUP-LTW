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
    echo $row['dataNascimento'];
    echo '<br>';
    echo "Gender: ";
    echo $row['sexo'];
    echo '<br>';
    echo "Register Date: ";
    echo $row['dataRegisto'];
    echo '<br>';
    echo "Extra information: ";
    echo "Novo campo para meter info extra";
    echo '<br>';

    echo "<button id='profile' onclick='editProfilePage.php'>Profile</button>";

    echo '<br>';

   }
   catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
  }
?>
</div>

<?php include_once('../templates/footer.php'); ?>
