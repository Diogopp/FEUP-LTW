<?php
  include('../database/connection.php');
 try{
      $stmt = $dbh->prepare('SELECT idUser FROM User WHERE name = ? AND password = ?');
      $stmt->execute(array($_POST['userLog'], $_POST['passLog']));
      if ($row = $stmt->fetch() != NULL)
        $_SESSION['currentUser']= $row['idUser'];
      else
        header("Location: ../index.php?failed");
    }
    catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
?>
