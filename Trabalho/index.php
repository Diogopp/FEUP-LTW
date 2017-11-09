  <?php
  session_start();

  include_once('database/connection.php');
  include_once('templates/header.php');

  
unset($_SESSION['user']);
//$_SESSION['user'] = 1;

?>

<section>
    <?php
      if (isset($_SESSION['user']))
          echo '
                PUT LISTS HERE
          ';
      else
        echo '
            coisas
        ';
     ?>
</section>

<?php
  include_once('templates/footer.php');
 ?>
