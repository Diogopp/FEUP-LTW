<div id = "leftSideBar">
  <section id ="filters">
  <h4><b>Filter by</b></h4>
    Category
        <select id ="categoryFilter" onchange="showCategory(this.value)">
          <option value='None'>All Tasks</option>
            <?php $categories = getAllListsFromUser($dbh);
                  foreach ($categories as $key => $list)
                      echo "<option value='".$list['category']."'>".$list['category']."</option>";
             ?>
        </select>
      Search
        <input type='text' id = "searchBar" name = "searchBar" placeholder="Search for a task..." onkeyup="getSearch(this.value)" />

  </section>
    <section id ="sorts">
  <h4><b>Sort by</b></h4>
       <button id = "sortAlpha" onclick="showAlphabetically()">Alphabetically</button>
       <button id = "sortTimes" onclick="sortTimes()">Timestamp</button>
  </section>
</div>
