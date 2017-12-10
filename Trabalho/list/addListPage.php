<?php
  session_start();
  include(__DIR__ . '/../database/connection.php');
  include_once('../templates/header.php');
 ?>
<div id = "newList">

    <label>Category Name: </label>
    <input type='text' id = 'listName' placeholder='Type the name' required />

    <label>Number of Tasks:  </label>
    <input type="number" value = "0" id ="numTasks" min="0">
    <br>
    <button id ="addNewList" onclick="generateTasks()">Generate Tasks</button>

    <div id = "newListTasks">
    </div>

</div>

<?php include_once('../templates/footer.php'); ?>
