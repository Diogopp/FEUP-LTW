<?php
  session_start();
  include(__DIR__ . '/../database/connection.php');

  if (!preg_match ("/^[a-zA-Z\s]+$/", $_POST['userLog'])){
    header("Location: ../index/index.php?specialChars");
    die();
 }
 if (!preg_match ("/^[a-zA-Z\s]+$/", $_POST['passLog'])){
   header("Location: ../index/index.php?specialChars");
   die();
 }
 try{
      $stmt = $dbh->prepare('SELECT idUser FROM User WHERE name = ? AND password = ?');
      $stmt->execute(array($_POST['userLog'], md5($_POST['passLog'])));
      if ( ($row = $stmt->fetch()) != NULL){
          $_SESSION['currentUser']= $row['idUser'];
          header("Location: ../index.php");
      }
      else
        header("Location: ../index/index.php?failed");

    }
    catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
    }

?>
