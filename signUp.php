
<!--Name: Claudia Mini
    Date: November 14th, 2015
  Note: Some of the code used in 
  the sign up process uses pieces 
  from Professor Schuforts code 
  on canvas-->
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" href="home.css">
</head>
<body>
   		<nav id="sansserif" class="reg-nav">
	      <ul class="nav-settings-ul-li nav-settings-ul-li-a">
	          <li class="nav-settings-ul-li nav-settings-ul-li-a"><a class="nav-settings-ul-li-a" href="signIn.php">Log-in</a></li>
	      </ul>
	    </nav>

    	<div id="wrapper">

		<header id="header">
			<div id="title">
				<h1>Rock, Paper, Scissors</h1>
				<div class="center">
					<p>Instructions: Please fill out the form in order to create a new account. Once your account has been created, you can return to the log-in page to log-in and begin playing Rock, Paper, Scissors! </p>
				</div>


			</div><!-- #title -->
		</header><!-- #header -->


<?php
  // Connect to the database
	define('DB_HOST', 'oniddb.cws.oregonstate.edu');
	define('DB_NAME', 'minic-db');
	define('DB_USER','minic-db');
	define('DB_PASSWORD','P8OhL7x42sbQkpgN');
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  if (isset($_POST['submit'])) {
    // Grab the profile data from the POST

    $userName = mysqli_real_escape_string($dbc, trim($_POST['userName']));
    $pass = mysqli_real_escape_string($dbc, trim($_POST['pass']));
    $firstName = mysqli_real_escape_string($dbc, trim($_POST['firstName']));
    $lastName = mysqli_real_escape_string($dbc, trim($_POST['lastName']));	

    if (!empty($userName) && !empty($pass)) {
      // Make sure someone isn't already registered using this userName
      $query = "SELECT * FROM UserName WHERE userName = '$userName'";
      $data = mysqli_query($dbc, $query);

    if (1 === preg_match('/^[A-Z].{0,20}[0-9]{2}$/', $pass)) {
      if (mysqli_num_rows($data) == 0) {
        // The userName is unique, so insert the data into the database

        $query = "INSERT INTO UserName (userName, pass, firstName, lastName) VALUES ('$userName', sha1('$pass'), '$firstName', '$lastName')";
        
        mysqli_query($dbc, $query);


        // Confirm success with the user
        echo '<br><br><p class="center">Your new account has been successfully created. You\'re now ready to log in.</p>
          <div id="Sign-In">
        <fieldset style="width:90%"><legend>LOG-IN HERE</legend>
          <form method="POST" action="./signIn.php">
            Username <br>
            <input type="text" name="userName" size="40"><br>
            Password <br>
            <input type="password" name="pass" size="40"><br><br>
            <input id="button-sign" type="submit" name="submit" value="Log-In">
          </form>
        </fieldset>
      </div>';

        mysqli_close($dbc);
        exit();
      }
      else {
        // An account already exists for this userName, so display an error message
        echo '<br><br><p class="error">An account already exists for this user name. Please use a different address.</p>';
        $userName = "";
      }
    }
    else{
       echo '<br><br><p>Your password should be combinations of letters and digits that must start with an uppercase letter and end with two digits. Please choose a different password.</p>';

    }

    }
    else {
      echo '<br /><br><p class="error">You must enter all of the sign-up data.</p>';
    }

  // }
  // $uppercase = preg_match('@[A-Z].{0-20}[0-9]{2}@', $pass);

  // $uppercase = preg_match('@[A-Z]@', $pass);
	// $lowercase = preg_match('@[a-z]@', $pass);
	// $number    = preg_match('@[0-9]@', $pass);
	// add restrictions to this password

	// if(!$uppercase< 8) {
 //  		echo '<br><br><p>Your password should be combinations of letters and digits that must start with an uppercase letter and end with two digits. Please choose a different password.</p>';
	// }

  }

  mysqli_close($dbc);
?>
<br>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <fieldset>
      <legend>Registration Info</legend><br />
      <label for="firstName">First Name:</label>
      <input type="text" id="firstName" name="firstName" /><br /> <br />
      <label for="lastName">Last Name:</label>
      <input type="text" id="lastName" name="lastName" /><br /> <br />
      <label for="userName">Username:</label>
      <input type="text" id="userName" name="userName" value="<?php if (!empty($userName)) echo $userName; ?>" /><br /><br />
      <label for="pass">Password:</label>
      <input type="password" id="pass" name="pass" /><br /> <br /><br />

    </fieldset>
    <br />
     <input type="submit" id="button-sign" value="Sign Up" name="submit" />
  </form>
  <br />
  <br />
   	<footer class="sansserif">
      All images are copyright to their owners. This is just a hypothetical site &copy; 2014 Copyriight Art Store
    </footer>

</body> 
</html>
