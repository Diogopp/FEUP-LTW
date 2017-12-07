<?php
	session_start();
  unset($_SESSION['currentUser']);
	echo 'You have just been logged out and are being reddirected';
  header('Location: ../');
 ?>
