<?php
  include_once('database/connection.php');
  include_once('database/post.php');

  try {
    $posts = getAllPosts($dbh);
  } catch (PDOException $e) {
    die($e->getMessage());
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>DueBook</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
  </head>
	<body>
	    <header>
	      <h1><a href="index.php">DueBook</a></h1>
	    </header>
		<section id="posts">
		  <?php foreach ($posts as $post) { ?>
		  <article>
		    <h2><?=$post['title']?></h2>
		    <p><?=$post['introduction']?></p>
		    <a href="view_post.php?id=<?=$post['id']?>">Read more...</a>
		  </article>
		  <?php } ?>
		</section>
		</body>
	</html>
