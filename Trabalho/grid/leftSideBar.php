<div id = "leftSideBar">
  <h4><b>Filter by</b></h4>
    <ul>
      <li>Category</li>

    <select id ="categoryFilter" onchange="showCategory(this.value)">
      <option value='None'>None</option>
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
  <li>Search</li>
</ul>

  <h4 id = "test"><b>Sort by</b></h4>
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
function showCategory(cat) {
  alert(cat);
  if (cat == "") {
    document.getElementById("tasks").innerHTML = "";
    return;
  }
  if (window.XMLHttpRequest)    // code for modern browsers
      xhttp = new XMLHttpRequest();
  else  // code for IE6, IE5
      xhttp = new ActiveXObject("Microsoft.XMLHTTP");

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("tasks").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "../database/getCategory.php?c="+cat, true);
  xhttp.send();
}
</script>
