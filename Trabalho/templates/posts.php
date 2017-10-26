<section id="posts">
  <?php foreach ($posts as $post) { ?>
  <article>
    <h2><?=$post['title']?></h2>
    <p><?=$post['introduction']?></p>
    <a href="view_post.php?id=<?=$post['id']?>">Read more...</a>
  </article>
  <?php } ?>
</section>
