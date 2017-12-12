<div id = "rightSideBar">
  <img id = "userPhoto" src="../assets/me.png" alt="User Photo" width=90%>
  <h4><b> <b></h4>
    <?php
    $user = getUserName($dbh);
    echo 'Name: '. $user['name'];
     ?>
  <br>
  <button id="profile">Profile</button>
  <br>
  <button id="logout">Log out</button>
  <div id = "listOptions">
    <button id ="addLis">Add List</button>
    <br>
    <button id ="remLis">Remove List</button>
    <br>
  </div>
  <br>
  <img id = "timeGif" src="../assets/time.gif" alt="quotes gif" width=90%>
</div>
