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

encodeForAjax = function(data){
    return Object.keys(data).map(function(k){
    return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])
    }).join('&');
}


showCategory = function(cat){
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
  xhttp.open("POST", "../database/getCategory.php", true);
  xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
  xhttp.send(encodeForAjax({category: cat}));
}



generateTasks = function(){
  let listName = document.getElementById("listName").value;
  if (listName == ""){
    alert("The Category field can't be empty!");
    return;
  }
  let tasks = document.getElementById("numTasks").value;

  if (window.XMLHttpRequest)    // code for modern browsers
      xhttp = new XMLHttpRequest();
  else  // code for IE6, IE5
      xhttp = new ActiveXObject("Microsoft.XMLHTTP");

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      if (tasks == 0)
         document.getElementById("newListTasks").innerHTML = "";
      else
         document.getElementById("newListTasks").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "../list/addNumTasks.php?num="+tasks+"&name="+listName, true);
  xhttp.send();
}

// updateElementFromList = function(id){
//   if (confirm("Are you sure you want to remove the task at hand?")){
//       let url = '../list/deleteItem.php?id=' + id;
//       console.log(url);
//       window.location.href= url;
//
//     }
// }
