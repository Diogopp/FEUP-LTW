<?php
  session_start();
  include(__DIR__ . '/../database/connection.php');
  try{
      //VERIFICAR PATHIMAGEM PARA A TABLE
    print_r($_SESSION);
  //  echo $_SESSION['currentUser'];
    $timestamp = time();
    $stmt = $dbh->prepare('INSERT into USER(idUser ,name, dataNascimento, password, sexo, dataRegisto)
    Values(?, ?, ?, ?, ?, ?)');

    $idUser = 999;

    $stmt->execute(array($idUser, $_POST['username'],$_POST['birthdate'],$_POST['password'], $_POST['gender'], $timestamp));


  }
    catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
  }

?>
