<?php
  session_start();
  include_once('../templates/header.php');
  include_once('../database/connection.php');
  include_once('../database/listsQueries.php');
?>

<?php
//   try{
//   $stmt = $dbh->prepare('SELECT * FROM User order by dataRegisto');
//   $stmt->execute();
//   print_r($stmt->fetchAll());
//  }
//  catch (Exception $e) {
//   echo 'Caught exception: ',  $e->getMessage(), "\n";
// }
if (isset($_SESSION['currentUser']))
    include_once('../grid/table.php');

 else
   include_once("../user/loginPage.php");
?>

<script type="text/javascript">

	function loginFailed()
	{
		alert("Wrong login combination.");
	}
	function loginFailedChars()
	{
		alert("You can't use some of those characters!");
	}
  function categoryNotFound()
	{
		alert("That category does not exist!");
	}

  <?php
  if (isset($_GET["specialChars"]))
    echo "loginFailedChars();";

	if (isset($_GET["failed"]))
		echo "loginFailed();";

  if (isset($_GET["categoryNotFound"]))
		echo "categoryNotFound();";

  ?>
</script>

<?php
  include_once('../templates/footer.php');
?>
