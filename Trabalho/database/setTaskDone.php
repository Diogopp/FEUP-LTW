<?php
  session_start();
  include(__DIR__ . '/../database/connection.php');

  try{

   $stmt = $dbh->prepare('UPDATE ELEMENT
                          SET done = 1
                          WHERE idElement = ? AND idUser = ?');

   $stmt->execute(array($_POST['task'], $_SESSION['currentUser']));

  }
  catch (Exception $e) {
   echo 'Caught exception: ',  $e->getMessage(), "\n";
  }

 ?>
