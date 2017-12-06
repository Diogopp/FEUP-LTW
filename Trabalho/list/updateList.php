<?php
  session_start();
  include(__DIR__ . '/../database/connection.php');
  try{
   $stmt = $dbh->prepare('UPDATE ELEMENT
                           SET idElement = ?, dataNascimento = ?, sexo = ?
                           WHERE idUser = ?');
   $stmt->execute(array($_GET['id']));
   header("Location: ../index.php");
  }
  catch (Exception $e) {
   echo 'Caught exception: ',  $e->getMessage(), "\n";
  }

?>
