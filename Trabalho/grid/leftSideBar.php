<div id = "leftSideBar">
  <h4><b>Filter by</b></h4>
    <ul>
      <li>Category</li>

    <select id ="categoryFilter" onchange="myFunction()">
<?php
$stmt = $dbh->prepare('SELECT DISTINCT category
                     FROM CATEGORY
                     LEFT JOIN Element ON Element.idCategory = Category.idCategory
                     WHERE Element.idUser = ?');
$stmt->execute(array($_SESSION['currentUser']));
echo "<option value='none'>None</option>";
while ( ($row = $stmt->fetch()) != null)
    echo "<option value='".$row['category']."'>".$row['category']."</option>";
?>
  </select>
  <li>Search</li>
</ul>

  <h4><b>Sort by</b></h4>
    <ul>
      <li><a href="" id = "sortAlpha" >Alphabetically</a></li>
      <li><a href="" id = "sortTimes" >Timestamp</a></li>
    </ul>
</div>

<script type="text/javascript">
function setDefaultOrder(x)
	{
		let defaultOrder = x;
	}
function myFunction() {
    var x = document.getElementById("categoryFilter").value;
    document.getElementById("test").innerHTML = "You selected: " + x;
}
</script>
