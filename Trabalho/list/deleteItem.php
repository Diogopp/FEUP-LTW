<?php
  session_start();
  include(__DIR__ . '/../database/connection.php');
 try{
      $stmt = $dbh->prepare('SELECT idElement FROM ELEMENT WHERE idElement = ? AND idUser = ?');
      $stmt->execute(array($_GET['id'], $_SESSION['currentUser']));
      if ($stmt->fetch()!= NULL ){
        $stmt = $dbh->prepare('DELETE FROM ELEMENT WHERE idElement = ?');
        $stmt->execute(array($_GET['id']));
      }
      header("Location: ../index.php");

    }
    catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
    }

?>
