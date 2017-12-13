<?php
  session_start();
  include(__DIR__ . '/../database/connection.php');
  include(__DIR__ . '/../database/listsQueries.php');

  try{

    $date = date('Y-m-d', time());
    if ($_POST['deadline'] < $date){
      header('Location: ../');
      die();
    }

    if (!preg_match ("/^[a-zA-Z\s]+$/", $_POST['task'])){
      header("Location: ../index/index.php?specialChars");
      die();
    }

    $stmt = $dbh->prepare('SELECT idCategory FROM Category WHERE category = ?');
    $stmt->execute(array($_POST['category']));
    if (($row = $stmt->fetch()) != null){
      $stmt = $dbh->prepare('INSERT INTO ELEMENT (tasks , deadLine, done , idUser, idCategory)
      values (?, ?, 0, ?, ?)');
      $stmt->execute(array($_POST['task'], $_POST['deadline'], $_SESSION['currentUser'],  $row['idCategory']));
    }
    else
      header("Location: ../index/index.php?categoryNotFound");

   }
  catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
  }

 header('Location: ../');

?>
