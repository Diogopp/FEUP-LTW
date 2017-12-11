<?php
session_start();
include_once('../database/connection.php');
include_once('../database/listsQueries.php');

 $category = $_POST['category'];

 $stmt = $dbh->prepare('SELECT DISTINCT category FROM CATEGORY
                        LEFT JOIN Element ON Element.idCategory = Category.idCategory
                        WHERE Element.idUser = ? AND
                        upper(category) LIKE upper(?) LIMIT 10');

 $stmt->execute(array($_SESSION['currentUser'],"$category%"));

 while( ($categories = $stmt->fetch() ) != null){
   $cat = $categories['category'];
   echo '<label onclick="setLabelValue(\''.$cat.'\')">'.$cat.'
         </label>
          <br>';
    }
?>
