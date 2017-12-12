<?php
  session_start();
  include(__DIR__ . '/../database/connection.php');
 try{

    $stmt = $dbh->prepare('SELECT idCategory FROM Category WHERE category = ?');
    $stmt->execute(array($_POST['listName']));
    $row = $stmt->fetch();
    $id = $row['idCategory'];

    $stmt = $dbh->prepare('DELETE FROM ELEMENT WHERE idCategory = ?');
    $stmt->execute(array($id));

    $stmt = $dbh->prepare('DELETE FROM category WHERE category = ?');
    $stmt->execute(array($_POST['listName']));
    header("Location: ../index.php");

   }
  catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
  }

?>
