<?php
  session_start();
  include 'connectivity.php';
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// Starting session and checking connectivity
  // $old_user = $_SESSION['username'];

  // if (!empty($old_user)) {
  //       echo '<br><br><h1> '.$old_user.', you are now logged out!</h1><br><br>';        
  // }else {
  //       echo '<center><font color="red"><h5> You have inputted the wrong username and/or password. Please try again. </h5></font></center>';
  //       include 'signIn.html';
  //       die();

  // }
?>

<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-responsive.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<body>

  <header>
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
          <ul class="nav navbar-nav">
            <li class="active"><a href="homePage.php">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="about.php">About Me</a></li>
            <li><a href="help.html">Help</a></li>
            <li><a href="past_fortunes.php">My Past Fortunes</a></li>
            <li><a href="other_fortunes.php">All Fortunes</a></li>
           
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="signOut.php">Log Out</a></li>

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header>

  <section>
  	<form method="get" action="game.php">
	<fieldset>
	<label>Please answer these questions to decide your fortune!</label>
	<p>
	<label>Choose a color to figure out your fortune!</label>

		<p>
		<label>Choose one and only one color</label>	
		<input type="radio" name="question1" value="1"><img src="http://images.sodahead.com/polls/0/0/3/6/9/8/8/3/5/052400565_Purple.png" alt="purple" width="100" height="100" />	
		<input type="radio" name="question1" value="2"><img src="http://cdn.wonderfulengineering.com/wp-content/uploads/2014/09/red-wallpaper-5.jpg" alt="red" width="100" height="100"/> 
		<input type="radio" name="question1" value="3"><img src="http://greensportsalliance.org/images/darkGreenSquare.gif" alt="green" width="100" height="100" />
		<input type="radio" name="question1" value="4"><img src="http://7-themes.com/data_images/out/35/6888399-navy-blue-wallpaper.jpg" alt="blue" width="100" height="100" />


		</p>
	
		<p> <label>Choose one and only one color</label>	
		<input type="radio" name="question2" value="1"><img src="http://images.sodahead.com/polls/0/0/3/6/9/8/8/3/5/052400565_Purple.png" alt="purple" width="100" height="100" />	
		<input type="radio" name="question2" value="2"><img src="http://cdn.wonderfulengineering.com/wp-content/uploads/2014/09/red-wallpaper-5.jpg" alt="red" width="100" height="100"/> 
		<input type="radio" name="question2" value="3"><img src="http://greensportsalliance.org/images/darkGreenSquare.gif" alt="green" width="100" height="100" />
		<input type="radio" name="question2" value="4"><img src="http://7-themes.com/data_images/out/35/6888399-navy-blue-wallpaper.jpg" alt="blue" width="100" height="100" />

		
			</p>
	

	<p>
		<input class="btn btn-default" type="submit" value="Submit"/>

	</p>
	</fieldset>
	</form>
	<br>
  </section>


  <footer>
    <nav class="navbar navbar-default navbar-bottom" role="navigation">
      <div class="container">
      </div>
    </nav>
  </footer>

	<script type="text/javascript" src="fortune.js"></script>


</body>

</html>
