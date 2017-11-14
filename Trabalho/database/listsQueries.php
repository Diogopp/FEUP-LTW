<?php

  function getAllElements($dbh) {
    $stmt = $dbh->prepare('SELECT * FROM ELEMENT WHERE idUser = ?');
    $stmt->execute(array($_SESSION['user']));
    return $stmt->fetchAll();
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

?>
