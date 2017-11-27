<?php
  session_start();

  include_once('database/connection.php');
  include_once('database/listsQueries.php');
  include_once('templates/header.php');

//unset($_SESSION['currentUser']);
//$_SESSION['currentUser'] = 90;

//USER FOR TESTING:
//User: ut odio
//password: fBTfRC6AS26R

 if (isset($_SESSION['currentUser'])){
   echo '
     <div class = "gridContainer">';
     include_once("leftSideBar.php");
     include_once("mainBar.php");
     include_once("rightSideBar.php");
    echo '</div>';
  }
  else
    include_once("user/loginPage.php");
?>

<script type="text/javascript">

	function loginFailed()
	{
		alert("Login inválido.");
	}

  <?php
		if (isset($_GET["failed"]))
			echo "loginFailed();";
  ?>
</script>

<?php
  include_once('templates/footer.php');
?>
