<?php
  session_start();
  include(__DIR__ . '/../database/connection.php');
  include_once('../templates/header.php');
 ?>

<div id = "returnList">
  <form method ="post" action="deleteList.php">

    <label>What is the list you wish to delete? </label>
    <input type='text' id = "listName" name = "listName" placeholder='Type for a list...' onkeyup="getSimilarList(this.value)" required/>
    <div id = "listDiv">
    </div>
    <br>
    <button id = "delete" type="submit">Delete List</button>

  </form>
  <button id = 'exit' onclick="window.location.href='../index.php'">Go back</button>
</div>


<script type="text/javascript">

	function categoryNotFound()
	{
		alert("That category does not exist!");
	}
	function failedChars()
	{
		alert("You can't use some of those characters!");
	}

  <?php
  if (isset($_GET["specialChars"]))
    echo "failedChars();";

	if (isset($_GET["categoryNotFound"]))
		echo "categoryNotFound();";
  ?>
</script>


<?php include_once('../templates/footer.php'); ?>
