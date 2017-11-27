<?php 
include_once('../database/listsQueries.php'); ?>

<div class="login-page">
  <div class="form">
    <form id="login" method="post" action = "user/login.php" onsubmit="javascript:login($dbh); return false;">
      <input type="text" name="userLog" placeholder="username" required/>
      <input type="password" name="passLog" placeholder="password" required/>
      <button id ="login" type="submit">Login</button>
      <p class="message">Not registered? <a href="user/registerPage.php">Create an account</a></p>

    </form>
  </div>
</div>
