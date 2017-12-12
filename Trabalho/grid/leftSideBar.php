<div id = "leftSideBar" style="height:180px">
  <section id ="filters" style="float:left;">
  <h4><b>Filter by</b></h4>
    <ul>
      <li>Category</li>
        <select id ="categoryFilter" onchange="showCategory(this.value)">
          <option value='None'>All Tasks</option>
            <?php $categories = getAllListsFromUser($dbh);
                  foreach ($categories as $key => $list)
                      echo "<option value='".$list['category']."'>".$list['category']."</option>";
             ?>
        </select>
      <li>Search</li>
        <input type='text' id = "searchBar" name = "searchBar" placeholder="Search for a task..." onkeyup="getSearch(this.value)" />
    </ul>
  </section>
    <section id ="sorts">
  <h4><b>Sort by</b></h4>
    <ul>
      <li><a href="" id = "sortAlpha" >Alphabetically</a></li>
      <li><a href="" id = "sortTimes" >Timestamp</a></li>
    </ul>

  </section>
</div>
