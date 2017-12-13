
<div>
  <div>
    <form id = "addItemForm " method="post" action = "../list/addNewItem.php" >
      <label>New Task: </label>
      <input type="text" name="task" placeholder="Task" required/>

      <label>Deadline: </label>
      <input type="date" name="deadline" required/>

      <?php
      if ($_POST['category'] == "None")
        echo '
        <br>
        <label>Category: </label>
        <input type="text" name="category" required/>';
      else
        echo '<input type="hidden" name="category" value="'.$_POST['category'].'" ></input>';
       ?>
       <br>
      <button id ="addNewItem" >Add Item</button>

    </form>
  </div>
</div>
