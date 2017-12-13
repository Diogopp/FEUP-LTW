<table>
  <tr>
    <td id = "leftSide" style="width:300px;">
      <table>
        <tr>
          <td style="width:200px; ">
            <div class="navBar">
              <h4><b> <b></h4>
              <!-- <?php
              $user = getUserName($dbh);
              echo 'Name: '. $user['name'];
               ?> -->
              <br>
              <br>
              <button id="profile">Profile</button>
              <br>
              <button id="logout">Log out</button>
              <br>
              <button id ="addLis">Add List</button>
              <br>
              <button id ="remLis">Remove List</button>
              <br>
              <br>
              <br>
              <img id = "timeGif" src="../assets/time.gif" alt="quotes gif" width=70%>
            </div>
          </td>
        </tr>
      </table>
    </td>
    <td id = "mainSide">
      <table style="padding-right: 40px; width:100%;">
        <tr>
          <td style="border-radius:10px; background-color:#FFF; box-shadow: 2px 2px 5px #000; padding: 5px 5px 5px 5px;">
            <table style="width:680px; height:10px;" >
              <tr>
                <td>
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

                </td>
                <td>
                    <table style="width:20px;">
                      <tr>
                        <td>
                          <h4><b>Sort by</b></h4>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <button id = "sortAlpha" onclick="showAlphabetically()">Alphabetically</button>
                        </td>
                        <td>
                          <button id = "sortTimes" onclick="sortTimes()">Timestamp</button>
                        </td>
                      </tr>
                    </table>
                </td>
              </tr>
            </table>


          </td>
        </tr>
        <tr>
          <td style="border-radius:10px; background-color:#FFF; box-shadow: 2px 2px 5px #000; padding: 5px 5px 5px 5px;">
            <div id ="tasks">
          <?php
            getAllElements($dbh);
          ?>
            </div>
              <!-- <button id ="addItem" type="button" onclick="addTask()" >Add Item </button>
              <br> -->
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
