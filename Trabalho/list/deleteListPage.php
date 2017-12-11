<?php
  session_start();
  include(__DIR__ . '/../database/connection.php');
  include_once('../templates/header.php');
 ?>

<div id = "returnList">
  <form method ="post" action="deleteList.php">

    <label>What is the list you wish to delete? </label>
    <input type='text' id = "listName" name = "listName" placeholder='Type for a list...' onkeyup="getSimilarList(this.value)" />
    <button type="submit">Delete List</button>

  </form>
  <div id = "listDiv">
  </div>
</div>


<?php include_once('../templates/footer.php'); ?>
