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
  error_reporting(-1); 
  ini_set('display_errors', 'On');
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  if (isset($_POST['submit'])) {
    // Grab the profile data from the POST

    $userName = mysqli_real_escape_string($dbc, trim($_POST['userName']));
    $password = mysqli_real_escape_string($dbc, trim($_POST['password']));
    $firstName = mysqli_real_escape_string($dbc, trim($_POST['firstName']));
    $lastName = mysqli_real_escape_string($dbc, trim($_POST['lastName']));  
    $description = mysqli_real_escape_string($dbc, trim($_POST['description'])); 
    $major = mysqli_real_escape_string($dbc, trim($_POST['major'])); 
    $spirit_animal = mysqli_real_escape_string($dbc, trim($_POST['spirit_animal'])); 
    $class_standing = mysqli_real_escape_string($dbc, trim($_POST['class_standing'])); 


    if (!empty($userName) && !empty($password)) {
      // Make sure someone isn't already registered using this userName
      $query = "SELECT * FROM student WHERE username = '$userName'";
      $data = mysqli_query($dbc, $query);

    if (1 === preg_match('/^[A-Z].{0,20}[0-9]{2}$/', $password)) {
      if (mysqli_num_rows($data) == 0) {
        // The userName is unique, so insert the data into the database

        $query = "INSERT INTO student (username, password, first_name, last_name, description, major, spirit_animal, class_standing) VALUES ('$userName', sha1('$password'), '$firstName', '$lastName', '$description', '$major', '$spirit_animal', '$class_standing')";
        var_dump($query);
        $result = mysqli_query($dbc, $query);
        if (!$result) {
            die('Query did not work.' . mysql_error());
            error_reporting(-1); 
            ini_set('display_errors', 'On');

        }
        // Confirm success with the user
        echo '<br><br><p class="center">Your new account has been successfully created. You\'re now ready to log in.</p>
          <div id="Sign-In">
          

            <fieldset style="width:90%"><legend>Click Button Below to Log In</legend>
              <form method="POST" action="signIn.html">
                  <input id="button-sign" class="btn btn-default" type="submit" value="Sign In">

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

  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="sign-up">
    <fieldset>
      <legend>Registration Info</legend><br />
      <label for="firstName">First Name:</label>
      <input type="text" id="firstName" name="firstName" /><br /> <br />
      <label for="lastName">Last Name:</label>
      <input type="text" id="lastName" name="lastName" /><br /> <br />
      <label for="userName">Username:</label>
      <input type="text" id="userName" name="userName" value="<?php if (!empty($userName)) echo $userName; ?>" /><br /><br />
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" /><br /> <br /><br />
      <label for="description">Description:</label><br>
      <!-- <input type="textarea" id="description" name="description" /><br /> <br /><br /> -->
      <textarea name="description" cols=40 rows=6></textarea> <P>



      <label for="major">Major:</label>
      <select name="major">
        <option value="">Select Major</option>
        <option value="computer_science">Computer Science</option>
        <option value="electrical_engineering">Electrical Engineering</option>
        <option value="zoology">Zoology</option>
        <option value="psychology">Psychology</option>
        <option value="mathematics">Mathematics</option>
        <option value="literature">Literature</option>
        <option value="mechanical_engineering">Mechanical Engineering</option>
        <option value="environmental_biology">Environmental Biology</option>
        <option value="chemical_engineering">Chemical Engineering</option>
        <option value="computer_engineering">Computer Engineering</option>
      </select><br /> <br /><br />
      <!-- <input type="text" id="major" name="major" /><br /> <br /><br /> -->
      <label for="spirit_animal">Spirit Animal:</label>
      <input type="text" id="spirit_animal" name="spirit_animal" /><br /> <br /><br />
      <label for="class_standing">Class Standing:</label>
      <select name="class_standing">
        <option value="">Select Standing</option>
        <option value="freshman">Freshman</option>
        <option value="sophomore">Sophomore</option>
        <option value="junior">Junior</option>
        <option value="senior">Senior</option>
      </select>
      <!-- <input type="text" id="class_standing" name="class_standing" /><br /> <br /><br /> -->
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