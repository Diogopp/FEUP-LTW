<!DOCTYPE html>
<html>
  <head>
    <title>DueBook</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/header.css">
  </head>
  <body>
    <header>
      <h1><a href="index.php">ToDueBook</a></h1>
    </header>
<?php
  if (isset($_SESSION['user'])){
    echo 'Name | Profile | Exit';
  }

 ?>

<script type="text/javascript">

function registerUser() {
  window.location.href="registerUser.php";
}

</script>
