<?php

function showTasks($elements){
  echo '
    <table style="width:100%">
        <tr>
          <th align="left">Task</th>
          <th align="left">Deadline</th>
          <th align="left">Done</th>
          </tr>';
  foreach ($elements as $key => $row){
    $deadline = date('d/m/Y', strtotime( $row['deadLine']));
    echo '
        <tr>
          <td>'. $row['tasks'].'</td>
          <td>'. $deadline.'</td>';
    if ($row['done'])
      echo ' <td> <input type="checkbox" name="checkbox" disabled="disabled" checked> </td>';
    else{
      echo ' <td> <input type="checkbox" onchange="setTaskDone('.$row['idElement'].')" id="'.$row['idElement'].'" </td>';
      echo'
       <td>
        <button id="rem_'.$row['idElement'].'" type="button" onclick="removeElementFromList('.$row['idElement'].')" > <i id = "fa_'.$row['idElement'].'" class="fa fa-close"></i></button>
      </td>';
    }
    echo' </tr>';
  }
  echo '</table>';

  echo '
      <div id = "addTask">
      </div>';
}
function getAllElements($dbh) {
    try{
      $stmt = $dbh->prepare('SELECT * FROM ELEMENT WHERE idUser = ?');
      $stmt->execute(array($_SESSION['currentUser']));
      showTasks($stmt->fetchAll());
    }
   catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
  }
}

function getAllListsFromUser($dbh){
  $stmt = $dbh->prepare('SELECT DISTINCT category
                       FROM CATEGORY
                       LEFT JOIN Element ON Element.idCategory = Category.idCategory
                       WHERE Element.idUser = ?');
  $stmt->execute(array($_SESSION['currentUser']));
  return $stmt->fetchAll();
}

function getTaskSearch($dbh, $task, $category){
  try {
   if ($category == "None"){
     $stmt = $dbh->prepare('SELECT * FROM Element
                            WHERE Element.idUser = ? AND
                            upper(tasks) LIKE upper(?)');
     $stmt->execute(array($_SESSION['currentUser'], "$task%"));
    }
   else {
     $stmt = $dbh->prepare('SELECT idCategory FROM Category WHERE category = ?');
     $stmt->execute(array($category));
     $row = $stmt->fetch();
     $category = $row['idCategory'];
     $stmt = $dbh->prepare('SELECT * FROM Element
                            WHERE Element.idUser = ? AND Element.idCategory = ? AND
                            upper(tasks) LIKE upper(?)');

     $stmt->execute(array($_SESSION['currentUser'],$category, "$task%"));
   }
   // echo $stmt->rowCount();
   // if ($stmt->rowCount() == 0){
   //    echo "<label> Nothing was found </label>";
   //    return;
   //    }
   showTasks($stmt->fetchAll());

  }
  catch (Exception $e) {
   echo 'Caught exception: ',  $e->getMessage(), "\n";
  }
}

function getCategorySearch($dbh, $category){

   $stmt = $dbh->prepare('SELECT DISTINCT category FROM CATEGORY
                          LEFT JOIN Element ON Element.idCategory = Category.idCategory
                          WHERE Element.idUser = ? AND
                          upper(category) LIKE upper(?) LIMIT 10');

   $stmt->execute(array($_SESSION['currentUser'],"$category%"));
   return $stmt->fetchAll();
}

function getUserName($dbh) {
  try{
    $stmt = $dbh->prepare('SELECT name FROM USER WHERE idUser = ?');
    $stmt->execute(array($_SESSION['currentUser']));
    return $row = $stmt->fetch();
  }
 catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
 }
}

function sortAphabetic($dbh) {
  try{
    $stmt = $dbh->prepare('SELECT * FROM ELEMENT WHERE idUser = ? Order by tasks');
    $stmt->execute(array($_SESSION['currentUser']));

    showTasks($stmt->fetchAll());

  }

 catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
  }
}

function sortByCategory($dbh, $categor) {
    try{
      $stmt = $dbh->prepare('SELECT ELEMENT.idElement, ELEMENT.tasks, ELEMENT.deadLine, ELEMENT.done, ELEMENT.idUser, ELEMENT.idCategory FROM ELEMENT,CATEGORY WHERE idUser = ? AND CATEGORY.category = ? AND ELEMENT.idCategory = CATEGORY.idCategory');
      $stmt->execute(array($_SESSION['currentUser'], $categor));

      showTasks($stmt->fetchAll());

    }
   catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
  }
}

function sortByDeadline($dbh) {
    try{
      $stmt = $dbh->prepare('SELECT * FROM ELEMENT WHERE idUser = ? Order by deadLine ASC');
      $stmt->execute(array($_SESSION['currentUser']));

      showTasks($stmt->fetchAll());
    }

   catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
  }
}
?>
