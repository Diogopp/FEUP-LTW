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

if (document.getElementById("addLis") != null)
  document.getElementById("addLis").onclick = function(event){
      window.location.href="../list/addListPage.php";
}

if (document.getElementById("remLis") != null)
  document.getElementById("remLis").onclick = function(event){
      window.location.href="../list/deleteList.php";
}

removeElementFromList = function(id){
  if (confirm("Are you sure you want to remove the task at hand?")){
      let url = '../list/deleteItem.php?id=' + id;
      console.log(url);
      window.location.href= url;

    }
}

// updateElementFromList = function(id){
//   if (confirm("Are you sure you want to remove the task at hand?")){
//       let url = '../list/deleteItem.php?id=' + id;
//       console.log(url);
//       window.location.href= url;
//
//     }
// }
