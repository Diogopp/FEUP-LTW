<div id = "rightSideBar">
<img id = "userPhoto" src="../assets/me.png" alt="User Photo" width=90%>
  <h4><b>Profile<b></h4>
    <?php getUserName($dbh); ?>
  <br>
  <button id="profile">Profile</button>
  <br>
  <button id="logout">Logout</button>
  <div id = "listOptions">
    <button id ="addLis">Add List</button>
    <br>
    <button id ="remLis">Remove List</button>
    <br>
  </div>

</div>
