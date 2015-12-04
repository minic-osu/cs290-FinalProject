<?php
  session_start();


  include 'connectivity.php';


  $db=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
 if (!$db) {
     die("Failed to connect to MySQL: " . mysqli_connect_error());
 }
?>

<!DOCTYPE html>
<head>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-responsive.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <script type="text/javascript" src="jquery-1.3.2.min.js"></script>
  <script type="text/javascript">

    $(document).ready(function()
    {
      // if (typeof jQuery == 'undefined') {
      //    alert('no');
      //  } else {
      //      alert('yes');
      //  }
      $('table#delTable td button.delete').click(function()
      {
        // alert('test');
        if (confirm("Are you sure you want to delete this row?"))
        {
          var id = $(this).attr('data-id');
          var data = 'id=' + id ;
          var parent = $(this).parent().parent();

          $.ajax(
          {
               type: "POST",
               url: "delete_row.php",
               data: data,
               cache: false,

               success: function()
               {
                parent.fadeOut('slow', function() {$(this).remove();});

               }
           });
        }
      });

      // style the table with alternate colors
      // sets specified color for every odd row
      $('table#delTable tr:odd').css('background',' #FFFFFF');
    });

  </script>
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
            <li><a href="about.php">About</a></li>
            <li><a href="help.php">Help</a></li>
            <li class="active"><a href="past_fortunes.php">My Past Fortunes</a></li>
            <li><a href="other_fortunes.php">All Fortunes</a></li>

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
$query = "SELECT fortune_desc, username, fortune.id as fid FROM student JOIN fortune ON student.id = fortune.student_id WHERE username = '".$username."' ";
// $result = mysql_query("SELECT fortune_desc, username, fortune.id FROM student JOIN fortune ON student.id = fortune.student_id WHERE username = '$username'", $con);
  $result = mysqli_query($db, $query);
  $row = mysqli_num_rows($result);
  echo "<table class='table' id='delTable' method='POST'>
  <tr><td colspan='5' align='center'><h3>Past Fortunes</h3><br> <p> Below is a table of all the fortunes that you have received.<br> NOTE: If you delete a fortune all fortunes of that same description will be gone as well upon page refresh.</td></tr>
  <tr>
  <th>User Name</th>
  <th>Fortune</th>
  <th>Delete</th>
  </tr>";
  while ($row = $result->fetch_assoc())
    {
    // var_dump($row['fid']);

    echo "<tr>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['fortune_desc'] . "</td>";
    echo "<td><button class='delete' data-id=" . $row['fid'] . "   ><img alt='' align='absmiddle' border='0' src='./delete.png'  width='20' height='20'/></button></td>";
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
