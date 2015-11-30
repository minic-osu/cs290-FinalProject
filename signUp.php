
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
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/bootstrap-responsive.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
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
            <!-- <li><a href="signIn.php">Log In</a></li> -->
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    	<div id="wrapper">

		<header id="header">
			<div id="title">
				<div class="center">
					<!-- <p>Instructions: </p> -->
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
     <input type="submit" class="btn btn-default" id="button-sign" value="Sign Up" name="submit" />
  </form>
  <br />
  <br />
  <footer>
    <nav class="navbar navbar-default navbar-bottom" role="navigation">
      <div class="container">
      </div>
    </nav>
  </footer>

</body> 
</html>
