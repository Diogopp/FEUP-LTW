<?php
  session_start();

  $_GLOBALS['root'] = dirname(__FILE__);
  include_once('database/connection.php');
  include_once('database/listsQueries.php');
  include_once('templates/header.php');


/*  try{
  $stmt = $dbh->prepare('SELECT * FROM User');
  $stmt->execute();
    print_r($stmt->fetchAll());
 }
 catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
}*/
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
		alert("Wrong login combination.");
	}

  <?php
		if (isset($_GET["failed"]))
			echo "loginFailed();";
  ?>
</script>

<?php
  include_once('templates/footer.php');
?>
