<?php
  session_start();

  include_once('database/connection.php');
  include_once('templates/header.php');
  include_once('database/listsQueries.php');


//unset($_SESSION['user']);
$_SESSION['user'] = 90;
  

 if (isset($_SESSION['user'])){

    echo ' 
    <div class = "gridContainer">
      <div id = "leftSideBar">
        FILTROS 
      </div>
      <section id = "mainSection">';
      getAllElements($dbh);
      echo '</section>
      <div id = "rightSideBar">
        CENAS PERFIL
      </div>
    </div> ';

  }
  else
      echo '
      <div class="login-page">
        <div class="form">
          <form id="login" action = "user/loginUser.php">
            <input type="text" placeholder="  username"/>
            <input type="password" placeholder="password"/>
            <button id ="login" type="submit">Login</button>
            <p class="message">Not registered? <a href="user/registerUser.php">Create an account</a></p>
                        <img float="right" border="0" alt="ToDueBook" src="assets/detective.png" width="200" height="200">
          </form>
        </div>
      </div>
        ';

  include_once('templates/footer.php');
 ?>
