<?php
function getAllElements($dbh) {
    try{
    $stmt = $dbh->prepare('SELECT * FROM ELEMENT WHERE idUser = ?');
    $stmt->execute(array($_SESSION['currentUser']));
    echo '
      <table style="width:100%">
          <tr>
            <th align="left">Task</th>
            <th align="left">Deadline</th>
            <th align="left">Done</th>
            </tr>';
    while($row = $stmt->fetch()){
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
   catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
  }
}

function getMaxElementID($dbh){
  try{
    $stmt = $dbh->prepare('SELECT idElement FROM Element ORDER BY idElement DESC LIMIT 1');
    $stmt->execute();
    if( ($row = $stmt->fetch()) == null)
      $row['idElement'] = 0;
    return $row['idElement'];
  }
  catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
  }
}
function getMaxCategoryID($dbh){
  try{
    $stmt = $dbh->prepare('SELECT idCategory FROM CATEGORY ORDER BY idCategory DESC LIMIT 1');
    $stmt->execute();
    if( ($row = $stmt->fetch()) == null)
      $row['idCategory'] = 0;
    return $row['idCategory'];
  }
  catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
  }
}
function getUserName($dbh) {
  try{
    $stmt = $dbh->prepare('SELECT name FROM USER WHERE idUser = ?');
    $stmt->execute(array($_SESSION['currentUser']));
    $row = $stmt->fetch();
    echo 'Name: '. $row['name'];
  }
 catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
 }
}

function sortAphabetic($dbh) {
  try{
    $stmt = $dbh->prepare('SELECT * FROM ELEMENT WHERE idUser = ? Order by tasks');
    $stmt->execute(array($_SESSION['currentUser']));
    echo '
          <table style="width:100%">
              <tr>
                <th align="left">Task</th>
                <th align="left">Deadline</th>
                <th align="left">Done</th>
                </tr>';
        while($row = $stmt->fetch()){
          echo '
              <tr>
                <td>'. $row['tasks'].'</td>
                <td>'. $row['deadLine'].'</td>';
          if ($row['done'])
            echo ' <td> <input type="checkbox" name="checkbox" disabled="disabled" checked> </td>';
          else
            echo ' <td> <input type="checkbox" name="checkbox" </td>';
          echo' </tr>';
          }
    echo '</table>';
  }

 catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
}
}

function sortByCategory($dbh, $categor) {
    try{
      $stmt = $dbh->prepare('SELECT ELEMENT.idElement, ELEMENT.tasks, ELEMENT.deadLine, ELEMENT.done, ELEMENT.idUser, ELEMENT.idCategory FROM ELEMENT,CATEGORY WHERE idUser = ? AND CATEGORY.category = ? AND ELEMENT.idCategory = CATEGORY.idCategory');
      $stmt->execute(array($_SESSION['currentUser'], $categor));
      echo '
            <table style="width:100%">
                <tr>
                  <th align="left">Task</th>
                  <th align="left">Deadline</th>
                  <th align="left">Done</th>
                  </tr>';
          while($row = $stmt->fetch()){
            echo '
                <tr>
                  <td>'. $row['tasks'].'</td>
                  <td>'. $row['deadLine'].'</td>';
            if ($row['done'])
              echo ' <td> <input type="checkbox" name="checkbox" disabled="disabled" checked> </td>';
            else{
              echo ' <td> <input type="checkbox" name="checkbox" </td>';
              echo'
               <td>
                <button id="rem_'.$row['idElement'].'" type="button" onclick="removeElementFromList('.$row['idElement'].')" > <i class="fa fa-close"></i></button>
              </td>';
            }
            echo' </tr>';
            }
      echo '</table>';
      echo '
          <div id = "addTask">
          </div>';
    }

   catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
  }
}

function sortByDeadline($dbh) {
    try{
      $stmt = $dbh->prepare('SELECT * FROM ELEMENT WHERE idUser = ? Order by deadLine ASC');
      $stmt->execute(array($_SESSION['currentUser']));
      echo '
            <table style="width:100%">
                <tr>
                  <th align="left">Task</th>
                  <th align="left">Deadline</th>
                  <th align="left">Done</th>
                  </tr>';
          while($row = $stmt->fetch()){
            echo '
                <tr>
                  <td>'. $row['tasks'].'</td>
                  <td>'. $row['deadLine'].'</td>';
            if ($row['done'])
              echo ' <td> <input type="checkbox" name="checkbox" disabled="disabled" checked> </td>';
            else
              echo ' <td> <input type="checkbox" name="checkbox" </td>';
            echo' </tr>';
            }
      echo '</table>';
    }

   catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
  }
}
?>
