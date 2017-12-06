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
      else
        echo ' <td> <input type="checkbox" name="checkbox" </td>';
      echo'
       <td>
        <button id="rem_'.$row['idElement'].'" type="button" onclick="removeElementFromList('.$row['idElement'].')" > <i class="fa fa-close"></i></button>
      </td>';
      echo' </tr>';
    }
    echo '</table>';
   }
   catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
  }
}

function getElementsByCategory($dbh, $category) {
  try{
  $stmt = $dbh->prepare('SELECT * FROM ELEMENT WHERE idCategory = ?');
  $stmt->execute(array($category));
  return $stmt->fetchAll();
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



?>
