<section id="posts">
  <article>
    <h2><?=$post['title']?></h2>
    <p><?=$post['introduction']?></p>
    <?php foreach ($paragraphs as $paragraph) {
       if (trim($paragraph) != '') { ?>        
          <p><?=$paragraph?></p>
      <?php } ?>
    <?php } ?> 
  <a href="edit_post.php?id=<?=$post['id']?>">Edit</a>
  </article>
</section>
