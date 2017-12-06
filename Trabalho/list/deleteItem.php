<?php
  session_start();
  include(__DIR__ . '/../database/connection.php');
 try{
      $stmt = $dbh->prepare('DELETE idElement FROM ELEMENT WHERE idElement = ?');
      $stmt->execute(array($_GET['id']));
      header("Location: ../index.php");
    }
    catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
    }

?>
