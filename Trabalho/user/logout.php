<?php
	echo 'You have just been logged out and are being reddirected';
    unset($_SESSION['user']);
    header('Location: ../index.php');
 ?>