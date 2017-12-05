<?php
  session_start();
  include(__DIR__ . '/../database/connection.php');
  include_once('../templates/header.php');
  try{
    $stmt = $dbh->prepare('UPDATE ELEMENT
                           SET name = ?, dataNascimento = ?, sexo = ?
                           WHERE idUser = ?');
  }
  catch (Exception $e) {
   echo 'Caught exception: ',  $e->getMessage(), "\n";
  }


?>
