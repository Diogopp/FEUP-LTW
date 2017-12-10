<?php
  session_start();
  include(__DIR__ . '/../database/connection.php');
  include_once('../templates/header.php');
 ?>

<!--idUser,name,dataNascimento , password , pathImage , sexo , dataRegisto  -->

<div id = "newList">
  <!-- <form id ="addList" method="post" action = "addList.php"> -->

    <label>Category Name: </label>
    <input type='text' name='listName' placeholder='Type the name here' required />

    <label>Number of Tasks:  </label>
    <input type="number" value = "0" id ="numTasks" min="0" max="10">

    <div id = "newListTasks">
    </div>

    <!-- <label>Task 1: </label>
    <input type='text' name='task1' placeholder='Type the Task here'/>
    <label>Deadline: </label>
    <input type="date" name="deadline1" />
    <br>

    <label>Task 2: </label>
    <input type='text' name='task2' placeholder='Type the Task here'/>
    <label>Deadline: </label>
    <input type="date" name="deadline2" />
    <br>

    <label>Task 3: </label>
    <input type='text' name='task3' placeholder='Type the Task here'/>
    <label>Deadline: </label>
    <input type="date" name="deadline3" />
    <br> -->

  <button id ="addNewList" onclick="generateTasks()">Generate Tasks</button>
<!-- </form> -->
</div>

<?php include_once('../templates/footer.php'); ?>
