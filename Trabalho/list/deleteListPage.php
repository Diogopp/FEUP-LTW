<?php
  session_start();
  include(__DIR__ . '/../database/connection.php');
  include_once('../templates/header.php');
 ?>

<div id = "returnList">
  <form method ="post" action="deleteList.php">

    <label>What is the list you wish to delete? </label>
    <input type='text' id = "listName" name = "listName" placeholder='Type for a list...' onkeyup="getSimilarList(this.value)" />
    <br>
    <button id = "delete" type="submit">Delete List</button>

  </form>
  <div id = "listDiv">
  </div>
  <button id = 'exit' onclick="window.location.href='../index.php'">Go back</button>
</div>


<?php include_once('../templates/footer.php'); ?>
