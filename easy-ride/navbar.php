<?php
function login() {
  session_start();
  if (isset($_SESSION['email'])) {
    echo "Logged in as " . $_SESSION['email'];
  } else {
echo <<<_END
  <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
  <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
    <form action="[YOUR ACTION]" method="post" accept-charset="UTF-8">
      <input id="user_username" style="margin-bottom: 15px;" type="text" name="user[username]" size="30" />
      <input id="user_password" style="margin-bottom: 15px;" type="password" name="user[password]" size="30" />
      <input id="user_remember_me" style="float: left; margin-right: 10px;" type="checkbox" name="user[remember_me]" value="1" />
      <label class="string optional" for="user_remember_me"> Remember me</label>
      <input class="btn btn-primary" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="commit" value="Sign In" />
    </form>
  </div>
_END;
  }
}
?>
<script src="js/bootstrap-dropdown.js"></script>
<script src="js/navbar.js"></script>
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="/index.php">Easy Ride</a>
      <div class="nav-collapse">
        <ul class="nav">
          <li class="active"><a href="/index.php">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="/register.php">Register</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <ul class="nav pull-right">
          <li><a href="register.php">Sign Up</a></li>
          <li class="divider-vertical"></li>
          <li class="dropdown">
            <?php login(); ?>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>