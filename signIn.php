<!--Name: Claudia Mini
    Date: November 14th, 2015
	Note: Some of the code used in 
	the sign up process uses pieces 
	from Professor Schuforts code 
	on canvas-->
<!DOCTYPE html>
<?php
	// $sess="./cs290/public_html/home.php";
    // ini_set('session.save_path',$sess);
	// session_start();
	// begin the session
	session_start(); 
	include 'connectivity.php';


// set the value of the session variable 'foo'
			// $_SESSION['foo']= ''; 

// echo a little message to say it is done
	// echo 'Setting value of foo'; 


 
	if ((isset($_POST['userName'])) && (isset($_POST['pass'])) ){
			// echo 'Before query'; 
		$userName = $_POST['userName'];
		$pass = $_POST['pass'];
		// echo 'Before query'; 
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		if ($dbc) {
			// echo 'Successfully connected to database';
		}else{
			die('Could not connect.');
		}
		
	// echo 'Before query'; 
		$query = "SELECT * FROM UserName WHERE userName='$userName' and pass=sha1('$pass')";
		// $name = "SELECT userName FROM UserName WHERE userName='$userName'";
		$result = mysqli_query($dbc, $query);
	// echo 'After query, before if'; 
		if (mysqli_num_rows($result) == 1) {
	
	// echo 'Within if'; 
			// The log-in is OK so set the user ID and username session vars (and cookies), and redirect to the home page
			  $row = mysqli_fetch_array($result);
			  $_SESSION['firstName'] = $row['firstName'];
			  $_SESSION['lastName'] = $row['lastName'];


			  $firstName = $_SESSION['firstName'];
			  $lastName = $_SESSION['lastName'];


			  // echo "<script>
			  // 			alert('Name: $firstName<br> Last: $lastName <br> Throws: $throws <br> Wins: $wins<br>Losses: $losses<br>DrawCount: $drawcount<br> Player: $player<br> Computer: $computer<br> Winlossdraw: $winlossdraw<br>')
			  // 		</script>";
			  // echo "<script>alert('$firstName')</script>";

		}
		else {
          // The username/password are incorrect so set an error message
			echo "Sorry, you must enter a valid username and password to log in.";
		}
		mysqli_free_result($result);
		mysqli_close($dbc);
	}  

?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>Sign-In</title>
		<!-- <link rel="stylesheet" type="text/css" href="home.css"> -->
		<link rel="stylesheet" href="css/bootstrap.css">
  		<link rel="stylesheet" href="css/bootstrap-responsive.css">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Fortune Teller</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Log In</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    	<div id="wrapper">

		<header id="header">
			<div id="title">

			</div><!-- #title -->
		</header><!-- #header -->
	<body id="body-color">

		<div id="Sign-In">

			<fieldset style="width:90%"><legend>LOG-IN HERE</legend>
				<?php
					// session_start();

					if (isset($_SESSION['valid_user'])) {
						echo " <h3> You are now logged in ".$_SESSION['firstName'];
						echo "</h3><h5>To go to the game please click the button below.</h5>"; 
						echo " <br /><br />"; 
						echo " <p> <button id='button-sign'><a href='./home.php'>Home</a> </button><br /><br />";
    					

					}
					else {
						if (isset($userName)) {
							// user tried but can't log in
							echo "<h2> Could not log you in </h2>";
						} else {
							// echo "stuff";
						}
						// Log in form

						echo " <form method='post' action='./signIn.php' > ";
						echo " Username: <input type='text' name='userName'> <br /> <br /> ";
						echo " Password: <input type='password' name='pass' /> <br /><br />";
						echo '<input id="button-sign" type="submit" value="Log-In" name="submit" />';

						echo "</form>";
						echo "<br>";
						echo "<form method='POST' action='signUp.php'>";
						echo "<input id='button-sign' type='submit' value='Sign-Up'>";

						echo "</form>";
					}	
				?>

			</fieldset>
		</div>
		<br>
		<br>
	</body>
		<footer id="signIn-footer" class="sansserif">
    	</footer>
</html> 