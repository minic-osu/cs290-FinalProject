<?php
  session_start();
  include 'connectivity.php';
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// Starting session and checking connectivity
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
            <li><a href="about.php">About</a></li>
            <li><a href="help.html">Help</a></li>
            <li><a href="past_fortunes.php">Past Fortunes</a></li>
           
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="signOut.php">Log Out</a></li>

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header>

	<p>Choose a color!</p>
  <section>
	  <figure>
		<img id ="red" onlick="compute(1)" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/43/Red_flag.svg/2000px-Red_flag.svg.pn://upload.wikimedia.org/wikipedia/commons/thumb/4/43/Red_flag.svg/2000px-Red_flag.svg.png" alt="red"  width="100" height="100"/>
	</figure>

	<figure>
		<img id ="green" onclick="compute(2)" src="http://greensportsalliance.org/images/darkGreenSquare.gif" alt="green" width="100" height="100"/>

  	</figure>

  	<figure>
		<img id ="blue" onclick = "compute(3)" src = " http://fotonin.com/data_images/out/3/753759-blue.jpg" alt="blue" width="100" height="100" />
  	</figure>

	<figure>
		<img id ="purple" onclick="compute(4)" src="http://images.sodahead.com/polls/0/0/3/6/9/8/8/3/5/052400565_Purple.png" alt="purple" width="100" height="100" />
	</figure>
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
