<?php
  session_start();
  include(__DIR__ . '/../database/connection.php');

  try{

    $stmt = $dbh->prepare('SELECT name FROM USER');
    $stmt->execute();
    while($row = $stmt->fetch()){
      if ($_POST['username'] == $row['name']){
          header('Location: registerPage.php?regFailed');
          die();
        }
    }

    $date = date('Y-m-d', time());

    if ($date < $_POST['birthdate']){
      header('Location: registerPage.php?dateFailed');
      die();
    }

    $pathImage = "0";

    //get max ID
    $stmt = $dbh->prepare('SELECT idUser FROM USER ORDER BY idUser DESC LIMIT 1');
    $stmt->execute();
    $row = $stmt->fetch();

    $idUser = $row['idUser'] + 1;

    if (isset($_POST['extra'])){
      $stmt = $dbh->prepare('INSERT INTO USER(idUser ,name, dataNascimento, password, pathImage, sexo, dataRegisto, extra)
      Values(?, ?, ?, ?, ?, ?, ?, ?)');
      $stmt->execute(array($idUser, $_POST['username'], $_POST['birthdate'], md5($_POST['password']), $pathImage, $_POST['gender'], $date, $_POST['extra']));
    }

    else {
      $stmt = $dbh->prepare('INSERT INTO USER(idUser ,name, dataNascimento, password, pathImage, sexo, dataRegisto)
      Values(?, ?, ?, ?, ?, ?, ?)');
      $stmt->execute(array($idUser, $_POST['username'], $_POST['birthdate'], md5($_POST['password']), $pathImage, $_POST['gender'], $date));
    }
  }
    catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
  }

  $_SESSION['currentUser'] = $idUser;

  header('Location: ../');

?>
