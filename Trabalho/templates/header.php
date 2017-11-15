<!DOCTYPE html>
<html>
  <head>
    <title>DueBook</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/header.css">
  </head>
  <body>
    <header>
      <a href="index.php">
         <img border="0" alt="ToDueBook" src="assets/logo.png" width="500" height="150">
      </a>
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
