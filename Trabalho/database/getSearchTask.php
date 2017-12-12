<?php
session_start();
include_once('../database/connection.php');
include_once('../database/listsQueries.php');

if($_POST['task'] == "" && $_POST['category'] == "None")
  getAllElements($dbh);
else
  getTaskSearch($dbh, $_POST['task'], $_POST['category']);

?>
