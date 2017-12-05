if (document.getElementById("profile") != null)
  document.getElementById("profile").onclick = function(event){
      window.location.href="../user/profile.php";
}

if (document.getElementById("logout") != null)
  document.getElementById("logout").onclick = function(event){
    if(confirm('Are you sure you want to logout?'))
      window.location.href="../user/logout.php";
}

if (document.getElementById("addItem") != null)
  document.getElementById("addItem").onclick = function(event){
      window.location.href="../list/addItem.php";
}

if (document.getElementById("remItem") != null)
  document.getElementById("remItem").onclick = function(event){
      window.location.href="../list/deleteItem.php";
}

if (document.getElementById("addLis") != null)
  document.getElementById("addLis").onclick = function(event){
      window.location.href="../list/addList.php";
}

if (document.getElementById("remLis") != null)
  document.getElementById("remLis").onclick = function(event){
      window.location.href="../list/deleteList.php";
}
