<?php
session_start();
include_once('../database/connection.php');
include_once('../database/listsQueries.php');

sortByDeadline($dbh);
?>