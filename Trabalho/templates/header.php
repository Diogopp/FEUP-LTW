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
  else {
<<<<<<< HEAD
    echo '<button id ="register" onclick="registerUser()">Registar</button>';
  }

 ?>

 <!-- totally not javascript, trust -->
=======
    echo '<button id ="register" onclick="registerUser()">Click me</button>';
  }

 ?>
>>>>>>> ce6407c0f4eadd0155b0ef66f3f60a59aa1b3de9
<script type="text/javascript">

function registerUser() {
  window.location.href="registerUser.php";
}

</script>
