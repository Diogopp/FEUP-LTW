<?php
  session_start();
  include(__DIR__ . '/../database/connection.php');
  try{
    $stmt = $dbh->prepare('SELECT Count(idElement) as numEle FROM Element WHERE idUser = ?');
    $stmt->execute(array($_SESSION['currentUser']));
    $row = $stmt->fetch();

    for ($i = 1; $i < $row['numEle']; $i++){
      echo $_POST['checkbox_'.$i];
      if (isset($_POST['checkbox_'.$i]) && $_POST['checkbox_'.$i] == "on"){
        $stmt = $dbh->prepare('UPDATE ELEMENT
                                SET done = ?
                                WHERE idElement = ?');
        $stmt->execute(array(1, $i));
      }
    }
    die();
   header("Location: ../index.php");
  }
  catch (Exception $e) {
   echo 'Caught exception: ',  $e->getMessage(), "\n";
  }

?>
