
<section id = "mainSection">
  <form id ="updateList" method ="post" action ="../list/updateList.php">
  <div id ="tasks">
<?php
  getAllElements($dbh);
?>
  </div>
    <button id = "upList" type="submit" >UpdateList</button>
 </form>
    <button id ="addItem" type="button" >Add Item </button>
    <br>
</section>
