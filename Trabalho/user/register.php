<?php
  session_start();
  include(__DIR__ . '/../database/connection.php');

  try{
      //VERIFICAR PATHIMAGEM PARA A TABLE

    $idUser = 1001;  //fazer query para ir buscar o maior ID
    $timestamp = time();
    $pathImage = "0";

    $stmt = $dbh->prepare('INSERT INTO USER(idUser ,name, dataNascimento, password, pathImage, sexo, dataRegisto)
    Values(?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute(array($idUser, $_POST['username'],$_POST['birthdate'],$_POST['password'], $pathImage, $_POST['gender'], $timestamp));

  }
    catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
  }

  $_SESSION['currentUser'] = $idUser;

  header('Location: ../');

?>
