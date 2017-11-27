<?php
  //  include('../database/connection.php');
    try{
      $stmt = $dbh->prepare('INSERT into USER(idUser,name, dataNascimento, password, pathImagem, sexo, dataRegisto)
      Values(?, ?, ?, ?, ?, ?, ?');

      $stmt->execute(array($_SESSION['currentUser'], $_POST['name'],$_POST['dataNascimento'],$_POST['password'],
                           $_POST['pathImage'], $_POST['sexo'], $_POST['dataRegisto']));

    /*  if ($row = $stmt->fetch() != NULL)
        $_SESSION['currentUser']= $row['idUser'];
      else
        header("Location: ../index.php?failed");*/
    }
    catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
    }

?>

<!--insert into USER (idUser,name,dataNascimento , password , pathImage , sexo , dataRegisto ) values (90, 'ut odio', '1/23/2001', 'fBTfRC6AS26R', 'ornare consequat', 'in', '12/17/2016');
  -->
