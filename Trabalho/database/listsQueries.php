<?php


  function getAllElements($dbh) {
    try{
    $stmt = $dbh->prepare('SELECT * FROM ELEMENT WHERE idUser = ?');
    $stmt->execute(array($_SESSION['user']));
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

  function getElementsByCategory($dbh, $category) {
    $stmt = $dbh->prepare('SELECT * FROM ELEMENT WHERE idCategory = ?');
    $stmt->execute(array($category));
    return $stmt->fetchAll();
  }

  function updatePost($dbh, $id, $title, $introduction, $fulltext) {
    $stmt = $dbh->prepare('UPDATE post SET title = ?, introduction = ?,  fulltext = ? WHERE id = ?');
    $stmt->execute(array($title, $introduction, $fulltext, $id));
  }

  function getNameDateUser($dbh) {
    try{
    $stmt = $dbh->prepare('SELECT name,dataNascimento FROM USER WHERE idUser = ?');
    $stmt->execute(array($_SESSION['user']));
    echo '
      <table style="width:100%">
          <tr>
            <th align="left">Name</th>
            <th align="left">Birth Date</th>
            </tr>';
    while($row = $stmt->fetch()){
      echo '
          <tr>
            <td>'. $row['name'].'</td>
            <td>'. $row['dataNascimento'].'</td>;
          </tr>';
    }
    echo '</table>';
   }
   catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
  }
}
?>
