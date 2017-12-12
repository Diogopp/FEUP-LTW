<?php
session_start();
include_once('../database/connection.php');
include_once('../database/listsQueries.php');

 $category = $_POST['category'];
 $similar = getCategorySearch($dbh, $category);

foreach ($similar as $key => $list){
   $cat = $list['category'];
   echo '<label onclick="setLabelValue(\''.$cat.'\')">'.$cat.'
         </label>
          <br>';
  }

?>
