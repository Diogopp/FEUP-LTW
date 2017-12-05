
<?php include_once('../templates/header.php'); ?>

<div>
  <div>
    <form id="addItem" method="post" action = "" >
      <label>New Element: </label>
      <input type="text" name="element" placeholder="element" required/>
      <br>
      <label>Extra: </label>
      <input type="text" name="extra" placeholder="Extra information..."/>
      <button id ="login" type="submit">Register</button>

    </form>
  </div>
</div>

<?php include_once('../templates/footer.php'); ?>
