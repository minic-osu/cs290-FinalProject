<?php
	session_start();

	$old_user = $_SESSION['valid_user'];
	unset($_SESSION['valid_user']);
	session_destroy();

?>
<!--Name: Claudia Mini
    Date: November 14th, 2015-->
<!DOCTYPE html>
<html>

  <head lang="en">
    <meta charset="utf-8">
    <title> Rock, Paper, Scissors</title>
    <link rel="stylesheet" href="./home.css">
  </head>


  	<body> 


	    <nav id="sansserif" class="reg-nav">
	      <ul class="nav-settings-ul-li nav-settings-ul-li-a">
	          <li class="nav-settings-ul-li nav-settings-ul-li-a"><a class="nav-settings-ul-li-a" href="signIn.php">Log In</a></li>
	      </ul>
	    </nav>

    	<div id="wrapper">

		<header id="header">
			<div id="title">
				<h1>Rock, Paper, Scissors</h1>
			</div><!-- #title -->
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
	<footer class="sansserif">
      All images are copyright to their owners. This is just a hypothetical site &copy; 2015 Copyright Rock, Paper, Scissors
    </footer>

	</body>


</body>
</html>

