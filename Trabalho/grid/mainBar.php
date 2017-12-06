
<section id = "mainSection">
  <form id ="updateList" method ="post" action ="../list/updateList.php">
<?php
  getAllElements($dbh);
?>
    <button id = "upList" type="submit" >UpdateList</button>
  </form>
    <button id ="addItem">Add Item </button>
    <br>
</section>
