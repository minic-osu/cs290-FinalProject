<?php
session_start();


$dbhost = 'oniddb.cws.oregonstate.edu';
$dbname = 'minic-db';
$dbuser = 'minic-db';
$dbpass = 'P8OhL7x42sbQkpgN';


// $dbhost = 'oniddb.cws.oregonstate.edu';
// $dbname = 'slikerk-db';
// $dbuser = 'slikerk-db';
// $dbpass = 'K7n4UBZhyUpBnB3J';

if ((isset($_POST['description'])) && (isset($_POST['major'])) && (isset($_POST['spirit_animal']))  && (isset($_POST['class_standing']))){
	$description = $_POST['description'];
	$major = $_POST['major'];
	$spirit_animal = $_POST['spirit_animal'];
	$class_standing = $_POST['class_standing'];
	$username = $_SESSION['username'];

	$dbc = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if (!$dbc) {
		die('Could not connect: ');
	}

	$query = "SELECT * FROM student WHERE username='$username'";
	$result = mysqli_query($dbc, $query);
	$var = mysqli_fetch_array($query);

	if (mysqli_num_rows($result) == 1) {

		//update the database with given form variables
		$query = ("UPDATE student SET description='$description', major='$major', spirit_animal='$spirit_animal', class_standing='$class_standing' WHERE username='mini'"); 
		
		mysqli_query($dbc, $query);
		echo "<html><center><font color='green'>You have successfuly updated your information!</font></center></html>";
		//var_dump($query);
	}
	else {
		//there was no username in the database
		echo "Sorry, you must be logged in to update your profile.";
	}
	mysqli_free_result($result);
	mysqli_close($dbc);
}  
?>

<!DOCTYPE html>
<head>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-responsive.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<body>

  <header>
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
	  <ul class="nav navbar-nav">
	    <li><a href="homePage.php">Home <span class="sr-only">(current)</span></a></li>
	    <li class="active"><a href="about.php">About Me</a></li>
	    <li><a href="help.php">Help</a></li>
        <li><a href="past_fortunes.php">My Past Fortunes</a></li>
        <li><a href="other_fortunes.php">All Fortunes</a></li>

	  </ul>

	  <ul class="nav navbar-nav navbar-right">
	    <li><a href="signOut.php">Log Out</a></li>

	  </ul>
	</div><!-- /.navbar-collapse -->
        <!-- Brand and toggle get grouped for better mobile display -->



      </div><!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Latest compiled and minified CSS -->


<form action="" method="POST">
About You:<br>
<textarea name="description" rows="10" cols="30">
</textarea>

<br>
Spirit Animal:<br>
<input type="text" name="spirit_animal" value="">
<br>

Major: <br>
<select name="major">
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
</select>

<br>
Class Standing: <br>
<select name="class_standing">
<option value="senior">Senior</option>
<option value="junior">Junior</option>
<option value="sophmore">Sophmore</option>
<option value="freshman">Freshman</option>
</select>

<br>
<br>
<input class="btn btn-default" type="submit" value="Update Profile">
</form>

  <footer>
    <nav class="navbar navbar-default navbar-bottom" role="navigation">
      <div class="container">
      </div>
    </nav>
  </footer>

</body>

</html>
