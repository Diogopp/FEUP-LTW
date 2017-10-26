<?php
  session_start();

  include_once('database/connection.php');
  include_once('database/post.php');
  include_once('templates/header.php');

  try {
    $posts = getAllPosts($dbh);
  } catch (PDOException $e) {
    die($e->getMessage());
  }

unset($_SESSION['user']);

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
