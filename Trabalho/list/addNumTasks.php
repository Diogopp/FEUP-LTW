<?php
session_start();
include_once('../database/connection.php');
include_once('../database/listsQueries.php');

$tasks = $_REQUEST['num'];
$list = $_REQUEST['name'];

echo '<form id ="addList" method="post" action = "addList.php">';

echo '<input type="hidden" name="newListName" value="'.$list.'" ></input>';

for ($i = 1; $i <= $tasks; $i++){
  echo' <label>Task '.$i.': </label>
  <input type="text" name="task_'.$i.'" placeholder="Type the Task here" required/>
  <label>Deadline: </label>
  <input type="date" name="deadline_'.$i.'" required />
  <br>';
}
echo '
  <button id="addTasksLists">Add Tasks </button>
</form>
';


?>
