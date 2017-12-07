
<section id = "mainSection">
  <form id ="updateList" method ="post" action ="../list/updateList.php">
<?php
  getAllElements($dbh);
?>
    <button id = "upList" type="submit" >UpdateList</button>
  </form>
    <button id ="addItem" type="button" >Add Item </button>
    <br>
</section>
