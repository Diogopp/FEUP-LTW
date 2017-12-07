<?php
  session_start();
  include(__DIR__ . '/../database/connection.php');
  include(__DIR__ . '/../database/listsQueries.php');

  try{

    $stmt = $dbh->prepare('INSERT INTO CATEGORY(Category) Values(?)');
    $stmt->execute(array($_POST['listName']));
    $idCategory = $dbh->lastInsertId();

    for ($i = 0; $i < 3; $i++){
        $taskName = 'task'.$i;

        if (isset($_POST[$taskName])){
          $deadline = 'deadline'.$i;
          $stmt = $dbh->prepare('INSERT INTO ELEMENT (tasks , deadLine, done , idUser, idCategory)
          values (?, ?, 0, ?, ?)');
          $stmt->execute(array($_POST[$taskName], $_POST[$deadline], $_SESSION['currentUser'], $idCategory));
       }
    }
  }
  catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
  }


//  header('Location: ../');

?>
