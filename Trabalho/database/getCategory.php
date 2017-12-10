<?php
session_start();
include_once('../database/connection.php');
include_once('../database/listsQueries.php');

$category = $_POST['category'];

if ($category != "None")
  sortByCategory($dbh, $category);
?>
