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
  <h4><b>Sort by</b></h4>
    <ul>
      <li><a href="" id = "sortAlpha" >Alphabetically</a></li>
      <li><a href="" id = "sortTimes" >Timestamp</a></li>
    </ul>
</div>
