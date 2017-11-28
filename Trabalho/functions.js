if (document.getElementById("logout") != null)
  document.getElementById("logout").onclick = function(event){
    if(confirm('Are you sure you want to logout?'))
      window.location.href="user/logout.php";

}

if (document.getElementById("profile") != null)
  document.getElementById("profile").onclick = function(event){
      window.location.href="user/profile.php";
}
