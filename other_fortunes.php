<?php
  session_start();


  include 'connectivity.php';


  $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
  $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());



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
            <li><a href="about.php">About Me</a></li>
            <li><a href="help.php">Help</a></li>
            <li><a href="past_fortunes.php">My Past Fortunes</a></li>
            <li class="active"><a href="other_fortunes.php">All Fortunes</a></li>
           
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="signOut.php">Log Out</a></li>

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Latest compiled and minified CSS -->





<?php
// using a query to get the users from the db with their scores and displaying it in a table.
$username = $_SESSION['username'];
$result = mysql_query("SELECT fortune_desc, username FROM student JOIN fortune ON student.id = fortune.student_id", $con);
  echo "<table class='table'>
  <tr><td colspan='5' align='center'><h3>Past Fortunes</h3><br> <p> Below is a table of all the fortunes that all users have.</td></tr>
  <tr>
  <th>User Name</th>
  <th>Fortune</th>
  </tr>";

  while($row = mysql_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['fortune_desc'] . "</td>";
    echo "</tr>";
    }
  echo "</table>";

?>



  <footer>
    <nav class="navbar navbar-default navbar-bottom" role="navigation">
      <div class="container">
      </div>
    </nav>
  </footer>

</body>

</html>
