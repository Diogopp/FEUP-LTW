<?php
  session_start();
  include(__DIR__ . '/../database/connection.php');
 try{
      $stmt = $dbh->prepare('SELECT category
                             FROM CATEGORY
                             LEFT JOIN Element ON Element.idCategory = Category.idCategory
                             WHERE Element.idUser = ?');

      $stmt->execute(array($_SESSION['currentUser']));
      if ($stmt->fetch()!= NULL ){
        $stmt = $dbh->prepare('DELETE FROM category WHERE idCategory = ?');
        $stmt->execute(array($_GET['id']));
      }
      header("Location: ../index.php");

    }
    catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
    }

?>
