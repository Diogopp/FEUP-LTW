<?php
  session_start();

  include_once('database/connection.php');
  include_once('templates/header.php');
  include_once('database/listsQueries.php');


//unset($_SESSION['user']);
$_SESSION['user'] = 1;

?>

<section>
    <?php

      echo getAllElements($dbh);

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
