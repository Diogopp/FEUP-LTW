<?php
  session_start();
  include(__DIR__ . '/../database/connection.php');

<div id = "profileEditPage">
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

   $stmt->execute(array($_POST['username'],$_POST['birthdate'],$_POST['gender'], $_SESSION['currentUser']));

  }
  catch (Exception $e) {
   echo 'Caught exception: ',  $e->getMessage(), "\n";
  }

  header('Location: profile.php');

 ?>
