<?php
	session_start();

	$old_user = $_SESSION['valid_user'];
	unset($_SESSION['valid_user']);
	session_destroy();

?>
<!DOCTYPE html>
<html>

  <head>
		<title>Sign-In</title>
		<link rel="stylesheet" href="css/bootstrap.css">
  		<link rel="stylesheet" href="css/bootstrap-responsive.css">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Fortune Teller</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="signIn.php">Log In</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    	<div id="wrapper">

		<header id="header">
			<div class="center">
				<!-- Saying goodbye to user -->
					<?php
						if (!empty($old_user)) {
							echo '<br><br><h1> '.$old_user.', you are now logged out!</h1><br><br>';
			
			  	
						} else {
							echo '<br><br><h1> You were not logged in! </h1><br><br>';
						}
					?>
			</div>
		</header><!-- #header -->





	</body>
<footer>
    <nav class="navbar navbar-default navbar-bottom" role="navigation">
      <div class="container">
      </div>
    </nav>
  </footer>


</body>
</html>

