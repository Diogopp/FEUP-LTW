<?php
  session_start();
  include(__DIR__ . '/../database/connection.php');
  include(__DIR__ . '/../database/listsQueries.php');

  try{

    $numTasks = (sizeof($_POST) -1)/2;
    $stmt = $dbh->prepare('INSERT INTO CATEGORY(Category) Values(?)');
    $stmt->execute(array($_POST['newListName']));
    $idCategory = $dbh->lastInsertId();

    for ($i = 1; $i <= $numTasks; $i++){
      $taskName = 'task_'.$i;
      $deadline = 'deadline_'.$i;

      $stmt = $dbh->prepare('INSERT INTO ELEMENT (tasks , deadLine, done , idUser, idCategory)
      values (?, ?, 0, ?, ?)');
      $stmt->execute(array($_POST[$taskName], $_POST[$deadline], $_SESSION['currentUser'], $idCategory));
     }
   }
  catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
  }

 header('Location: ../');

?>
