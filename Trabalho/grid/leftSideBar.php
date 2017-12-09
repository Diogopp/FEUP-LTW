<div id = "leftSideBar">
  <h4><b>Filter by Category</b></h4>
    <select id ="categoryFilter">
<?php
$stmt = $dbh->prepare('SELECT DISTINCT category
                     FROM CATEGORY
                     LEFT JOIN Element ON Element.idCategory = Category.idCategory
                     WHERE Element.idUser = ?');
$stmt->execute(array($_SESSION['currentUser']));
while ( ($row = $stmt->fetch()) != null)
    echo "<option value='".$row['category']."'>".$row['category']."</option>";
?>
  </select>
    <ul>
      <li><a onclick="setDefaultOrder(1);" href="#" ></a></li>
      <li><a onclick="setDefaultOrder(2);" href="#" >Search</a></li>
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
</script>
