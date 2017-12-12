<?php
  session_start();

  include_once('../database/connection.php');
  include_once('../database/listsQueries.php');
  include_once('../templates/header.php');


//   try{
//   $stmt = $dbh->prepare('SELECT * FROM User order by dataRegisto');
//   $stmt->execute();
//   print_r($stmt->fetchAll());
//  }
//  catch (Exception $e) {
//   echo 'Caught exception: ',  $e->getMessage(), "\n";
// }
 if (isset($_SESSION['currentUser'])){
   echo '
     <div class = "gridContainer">';
     include_once("../grid/dateBar.php");
     include_once("../grid/leftSideBar.php");
     include_once("../grid/mainBar.php");
     include_once("../grid/rightSideBar.php");
    echo '</div>';
  }
  else
    include_once("../user/loginPage.php");
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
  include_once('../templates/footer.php');
?>
