
<section id = "mainSection">
  <form id ="updateList" method ="post" action ="list/updateList.php">
<?php
  getAllElements($dbh);
?>
    <button id="updList">UpdateList</button>
  </form>

    <button id ="addItem">Add Item </button>
    <button id ="remItem">Remove Item </button>
    <br>
</section>
