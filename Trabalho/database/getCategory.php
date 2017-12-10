<?php
session_start();

include_once('../database/connection.php');
include_once('../database/listsQueries.php');

$category = $_REQUEST["c"];
if ($category != "None")
  sortByCategory($dbh, $category);
?>
