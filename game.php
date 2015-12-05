<!DOCTYPE html>
<html>
<body>
	
	<title>Sign-In</title>
		<link rel="stylesheet" href="css/bootstrap.css">
  		<link rel="stylesheet" href="css/bootstrap-responsive.css">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
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
    	<div id="wrapper">

		<header id="header">
		</header><!-- #header -->


<?php
session_start();
include 'connectivity.php';

$conn = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
if(!$conn){
	die('Could not connect: '.mysql_error());
}


function playgame($conn,$username,$answer1,$answer2)
{

	//first option
	if($answer1 == 1)
	{
		if($answer2 ==1)
		{
			$id_query = "SELECT id FROM student WHERE username = '$username'";
		//	var_dump($id_query);
			$id_query2 = mysqli_query($conn,$id_query);
		//	var_dump($id_query2);
			if(!$id_query2)
				echo"<p>There is no id</p>";
		
			$id_query3 = mysqli_fetch_array($id_query2);
			$id_query4 = $id_query3['id'];

			
			$fortune = "<b>Good things are going coming your way</b>";
			echo"<p>Your fortune is: ".$fortune;

			$new_query = "INSERT INTO fortune (id, student_id,fortune_desc) VALUES(1,'$id_query4','$fortune')";
		//	var_dump($new_query);
			if(!$new_query)
				echo"<p>No update to fortune description</p>";
			else
				$new_query2 = mysqli_query($conn,$new_query);
			if(!$new_query2)
				echo"<p>Final query didn't go through</p";

			echo"<p>If you would like to play again, click play again!<p>";
			echo '<a href="homePage.php" class="btn btn-default" >Play Again</a>';  
		}

		else if($answer2 ==2)
		{
			$id_query = "SELECT id FROM student WHERE username = '$username'";
		//	var_dump($id_query);
			$id_query2 = mysqli_query($conn,$id_query);
		//	var_dump($id_query2);
			if(!$id_query2)
				echo"<p>There is no id</p>";
		
			$id_query3 = mysqli_fetch_array($id_query2);
			$id_query4 = $id_query3['id'];

			
			$fortune = "<b>Good things are not coming your way</b>";
			echo"<p>Your fortune is: ".$fortune;

			$new_query = "INSERT INTO fortune (id,student_id,fortune_desc) VALUES(2,'$id_query4','$fortune')";
		//	var_dump($new_query);
			if(!$new_query)
				echo"<p>No update to fortune description</p>";
			else
				$new_query2 = mysqli_query($conn,$new_query);
			if(!$new_query2)
				echo"<p>Final query didn't go through</p";

			echo"<p>If you would like to play again, click play again!<p>";
			echo '<a href="homePage.php" class="btn btn-default">Play Again</a>';  
		}

		else if($answer2 ==3)
		{
			$id_query = "SELECT id FROM student WHERE username = '$username'";
		//	var_dump($id_query);
			$id_query2 = mysqli_query($conn,$id_query);
		//	var_dump($id_query2);
			if(!$id_query2)
				echo"<p>There is no id</p>";
		
			$id_query3 = mysqli_fetch_array($id_query2);
			$id_query4 = $id_query3['id'];

			
			$fortune = "<b>You may want to reconsider the decision you're making</b>";
			echo"<p>Your fortune is: ".$fortune;

			$new_query = "INSERT INTO fortune (id,student_id,fortune_desc) VALUES(3,'$id_query4','$fortune')";
		//	var_dump($new_query);
			if(!$new_query)
				echo"<p>No update to fortune description</p>";
			else
				$new_query2 = mysqli_query($conn,$new_query);
			if(!$new_query2)
			//	echo"<p>Final query didn't go through</p";

			echo"<p>If you would like to play again, click play again!<p>";
			echo "<a href='homePage.php' class='btn btn-default' >Play Again</a></button>";  
		}

		else
		{
			$id_query = "SELECT id FROM student WHERE username = '$username'";
		//	var_dump($id_query);
			$id_query2 = mysqli_query($conn,$id_query);
		//	var_dump($id_query2);
			if(!$id_query2)
				echo"<p>There is no id</p>";
		
			$id_query3 = mysqli_fetch_array($id_query2);
			$id_query4 = $id_query3['id'];

			
			$fortune = "<b>Be close to those who you love...they may need you</b>";
			echo"<p>Your fortune is: ".$fortune;

			$new_query = "INSERT INTO fortune (id,student_id,fortune_desc) VALUES(4,'$id_query4','$fortune')";
		//	var_dump($new_query);
			if(!$new_query)
				echo"<p>No update to fortune description</p>";
			else
				$new_query2 = mysqli_query($conn,$new_query);
			if(!$new_query2)
				echo"<p>Final query didn't go through</p";

			echo"<p>If you would like to play again, click play again!<p>";
			echo '<a href="homePage.php" class="btn btn-default" >Play Again</a>';  
		}

	}

	else if($answer1==2)
	{

		if($answer2 ==1)
		{
			$id_query = "SELECT id FROM student WHERE username = '$username'";
		//	var_dump($id_query);
			$id_query2 = mysqli_query($conn,$id_query);
		//	var_dump($id_query2);
			if(!$id_query2)
				echo"<p>There is no id</p>";
		
			$id_query3 = mysqli_fetch_array($id_query2);
			$id_query4 = $id_query3['id'];

			
			$fortune = "<b>Watch your back</b>";
			echo"<p>Your fortune is: ".$fortune;

			$new_query = "INSERT INTO fortune (id,student_id,fortune_desc) VALUES(5,'$id_query4','$fortune')";
		//	var_dump($new_query);
			if(!$new_query)
				echo"<p>No update to fortune description</p>";
			else
				$new_query2 = mysqli_query($conn,$new_query);
			if(!$new_query2)
				echo"<p>Final query didn't go through</p";

			echo"<p>If you would like to play again, click play again!<p>";
			echo '<a href="homePage.php" class="btn btn-default">Play Again</a>';  
		}
	
		else if($answer2 ==2)
		{
			$id_query = "SELECT id FROM student WHERE username = '$username'";
	//		var_dump($id_query);
			$id_query2 = mysqli_query($conn,$id_query);
	//		var_dump($id_query2);
			if(!$id_query2)
				echo"<p>There is no id</p>";
		
			$id_query3 = mysqli_fetch_array($id_query2);
			$id_query4 = $id_query3['id'];

			
			$fortune = "<b>Pay attention to your surroundings</b>";
			echo"<p>Your fortune is: ".$fortune;

			$new_query = "INSERT INTO fortune (id,student_id,fortune_desc) VALUES(6,'$id_query4','$fortune')";
	//		var_dump($new_query);
			if(!$new_query)
				echo"<p>No update to fortune description</p>";
			else
				$new_query2 = mysqli_query($conn,$new_query);
			if(!$new_query2)
				echo"<p>Final query didn't go through</p";

			echo"<p>If you would like to play again, click play again!<p>";
			echo '<a href="homePage.php" class="btn btn-default" >Play Again</a>';  
		}
	

		else if($answer2 ==3)
		{
			$id_query = "SELECT id FROM student WHERE username = '$username'";
		//	var_dump($id_query);
			$id_query2 = mysqli_query($conn,$id_query);
		//	var_dump($id_query2);
			if(!$id_query2)
				echo"<p>There is no id</p>";
		
			$id_query3 = mysqli_fetch_array($id_query2);
			$id_query4 = $id_query3['id'];

			
			$fortune = "<b>Be generous to those who have less and considerate to those who have more...generosity is a good look for you</b>";
			echo"<p>Your fortune is: ".$fortune;

			$new_query = "INSERT INTO fortune (id,student_id,fortune_desc) VALUES(7,'$id_query4','$fortune')";
		//	var_dump($new_query);
			if(!$new_query)
				echo"<p>No update to fortune description</p>";
			else
				$new_query2 = mysqli_query($conn,$new_query);
			if(!$new_query2)
				echo"<p>Final query didn't go through</p";

			echo"<p>If you would like to play again, click play again!<p>";
			echo '<a href="homePage.php" class="btn btn-default" >Play Again</a>';  
		}

		else
		{
			$id_query = "SELECT id FROM student WHERE username = '$username'";
		//	var_dump($id_query);
			$id_query2 = mysqli_query($conn,$id_query);
		//	var_dump($id_query2);
			if(!$id_query2)
				echo"<p>There is no id</p>";
		
			$id_query3 = mysqli_fetch_array($id_query2);
			$id_query4 = $id_query3['id'];

			
			$fortune = "<b>Be considerate to those around you.</b>";
			echo"<p>Your fortune is: ".$fortune;

			$new_query = "INSERT INTO fortune (id,student_id,fortune_desc) VALUES(8,'$id_query4','$fortune')";
//			var_dump($new_query);
			if(!$new_query)
				echo"<p>No update to fortune description</p>";
			else
				$new_query2 = mysqli_query($conn,$new_query);
			if(!$new_query2)
				echo"<p>Final query didn't go through</p";

			echo"<p>If you would like to play again, click play again!<p>";
			echo '<a href="homePage.php" class="btn btn-default" >Play Again</a>';  
		}

	}

	else if($answer1 ==3)
		{
			if($answer2 ==1)
			{
				$id_query = "SELECT id FROM student WHERE username = '$username'";
			//	var_dump($id_query);
				$id_query2 = mysqli_query($conn,$id_query);
			//	var_dump($id_query2);
				if(!$id_query2)
					echo"<p>There is no id</p>";

				$id_query3 = mysqli_fetch_array($id_query2);
				$id_query4 = $id_query3['id'];


				$fortune = "<b>Today you will eat something less than $10</b>";
				echo"<p>Your fortune is: ".$fortune;

				$new_query = "INSERT INTO fortune (id,student_id,fortune_desc) VALUES(9,'$id_query4','$fortune')";
			//	var_dump($new_query);
				if(!$new_query)
					echo"<p>No update to fortune description</p>";
				else
					$new_query2 = mysqli_query($conn,$new_query);
				if(!$new_query2)
					echo"<p>Final query didn't go through</p";

				echo"<p>If you would like to play again, click play again!<p>";
				echo '<a href="homePage.php" class="btn btn-default">Play Again</a>';  
			}

			else if($answer2 ==2)
			{
				$id_query = "SELECT id FROM student WHERE username = '$username'";
			//	var_dump($id_query);
				$id_query2 = mysqli_query($conn,$id_query);
			//	var_dump($id_query2);
				if(!$id_query2)
					echo"<p>There is no id</p>";

				$id_query3 = mysqli_fetch_array($id_query2);
				$id_query4 = $id_query3['id'];


				$fortune = "<b>The effort you put in may not be recognized</b>";
				echo"<p>Your fortune is: ".$fortune;

				$new_query = "INSERT INTO fortune (id,student_id,fortune_desc) VALUES(10,'$id_query4','$fortune')";
			//	var_dump($new_query);
				if(!$new_query)
					echo"<p>No update to fortune description</p>";
				else
					$new_query2 = mysqli_query($conn,$new_query);
				if(!$new_query2)
					echo"<p>Final query didn't go through</p";

				echo"<p>If you would like to play again, click play again!<p>";
				echo '<a href="homePage.php" class="btn btn-default" >Play Again</a>';  
			}

			else if($answer2 ==3)
			{
				$id_query = "SELECT id FROM student WHERE username = '$username'";
			//	var_dump($id_query);
				$id_query2 = mysqli_query($conn,$id_query);
			//	var_dump($id_query2);
				if(!$id_query2)
					echo"<p>There is no id</p>";

				$id_query3 = mysqli_fetch_array($id_query2);
				$id_query4 = $id_query3['id'];


				$fortune = "<b>You may need to spend more time on yourself</b>";
				echo"<p>Your fortune is: ".$fortune;

				$new_query = "INSERT INTO fortune (id,student_id,fortune_desc) VALUES(11,'$id_query4','$fortune')";
			//	var_dump($new_query);
				if(!$new_query)
					echo"<p>No update to fortune description</p>";
				else
					$new_query2 = mysqli_query($conn,$new_query);
				if(!$new_query2)
					echo"<p>Final query didn't go through</p";

				echo"<p>If you would like to play again, click play again!<p>";
				echo '<a href="homePage.php" class="btn btn-default" >Play Again</a>';  
			}

			else
			{
				$id_query = "SELECT id FROM student WHERE username = '$username'";
			//	var_dump($id_query);
				$id_query2 = mysqli_query($conn,$id_query);
			//	var_dump($id_query2);
				if(!$id_query2)
					echo"<p>There is no id</p>";

				$id_query3 = mysqli_fetch_array($id_query2);
				$id_query4 = $id_query3['id'];


				$fortune = "<b>The things you want may not be the things you need</b>";
				echo"<p>Your fortune is: ".$fortune;

				$new_query = "INSERT INTO fortune (id,student_id,fortune_desc) VALUES(12,'$id_query4','$fortune')";
			//	var_dump($new_query);
				if(!$new_query)
					echo"<p>No update to fortune description</p>";
				else
					$new_query2 = mysqli_query($conn,$new_query);
				if(!$new_query2)
					echo"<p>Final query didn't go through</p";

				echo"<p>If you would like to play again, click play again!<p>";
				echo '<a href="homePage.php" class="btn btn-default">Play Again</a>';  
			}
		}

		else{

			if($answer2 ==1)
			{
				$id_query = "SELECT id FROM student WHERE username = '$username'";
			//	var_dump($id_query);
				$id_query2 = mysqli_query($conn,$id_query);
			//	var_dump($id_query2);
				if(!$id_query2)
					echo"<p>There is no id</p>";

				$id_query3 = mysqli_fetch_array($id_query2);
				$id_query4 = $id_query3['id'];


				$fortune = "<b>The lesser of the two evils is still evil</b>";
				echo"<p>Your fortune is: ".$fortune;

				$new_query = "INSERT INTO fortune (id,student_id,fortune_desc) VALUES(13,'$id_query4','$fortune')";
			//	var_dump($new_query);
				if(!$new_query)
					echo"<p>No update to fortune description</p>";
				else
					$new_query2 = mysqli_query($conn,$new_query);
				if(!$new_query2)
					echo"<p>Final query didn't go through</p";

				echo"<p>If you would like to play again, click play again!<p>";
				echo '<a href="homePage.php" class="btn btn-default" >Play Again</a>';  
			}

			else if($answer2 ==2)
			{
				$id_query = "SELECT id FROM student WHERE username = '$username'";
			//	var_dump($id_query);
				$id_query2 = mysqli_query($conn,$id_query);
			//	var_dump($id_query2);
				if(!$id_query2)
					echo"<p>There is no id</p>";

				$id_query3 = mysqli_fetch_array($id_query2);
				$id_query4 = $id_query3['id'];


				$fortune = "<b>You will face regret and dissapointment once again</b>";
				echo"<p>Your fortune is: ".$fortune;

				$new_query = "INSERT INTO fortune (id,student_id,fortune_desc) VALUES(14,'$id_query4','$fortune')";
			//	var_dump($new_query);
				if(!$new_query)
					echo"<p>No update to fortune description</p>";
				else
					$new_query2 = mysqli_query($conn,$new_query);
				if(!$new_query2)
					echo"<p>Final query didn't go through</p";

				echo"<p>If you would like to play again, click play again!<p>";
				echo '<a href="homePage.php" class="btn btn-default" >Play Again</a>';  
			}

			else if($answer2 ==3)
			{
				$id_query = "SELECT id FROM student WHERE username = '$username'";
			//	var_dump($id_query);
				$id_query2 = mysqli_query($conn,$id_query);
			//	var_dump($id_query2);
				if(!$id_query2)
					echo"<p>There is no id</p>";

				$id_query3 = mysqli_fetch_array($id_query2);
				$id_query4 = $id_query3['id'];


				$fortune = "<b>You will be happy and sad many times in your life but never alone</b>";
				echo"<p>Your fortune is: ".$fortune;

				$new_query = "INSERT INTO fortune (id,student_id,fortune_desc) VALUES(15,'$id_query4','$fortune')";
			//	var_dump($new_query);
				if(!$new_query)
					echo"<p>No update to fortune description</p>";
				else
					$new_query2 = mysqli_query($conn,$new_query);
				if(!$new_query2)
					echo"<p>Final query didn't go through</p";

				echo"<p>If you would like to play again, click play again!<p>";
				echo '<a href="homePage.php" class="btn btn-default" >Play Again</a>';  
			}

			else
			{
				$id_query = "SELECT id FROM student WHERE username = '$username'";
			//	var_dump($id_query);
				$id_query2 = mysqli_query($conn,$id_query);
			//	var_dump($id_query2);
				if(!$id_query2)
					echo"<p>There is no id</p>";

				$id_query3 = mysqli_fetch_array($id_query2);
				$id_query4 = $id_query3['id'];


				$fortune = "<b>Those around you have a deep influence over you</b>";
				echo"<p>Your fortune is: ".$fortune;

				$new_query = "INSERT INTO fortune (id,student_id,fortune_desc) VALUES(16,'$id_query4','$fortune')";
			//	var_dump($new_query);
				if(!$new_query)
					echo"<p>No update to fortune description</p>";
				else
					$new_query2 = mysqli_query($conn,$new_query);
				if(!$new_query2)
					echo"<p>Final query didn't go through</p";

				echo"<p>If you would like to play again, click play again!<p>";
				echo '<a href="homePage.php" class="btn btn-default" >Play Again</a>';  
			}


		}

}





$answer1 = $_GET['question1'];
$answer2 = $_GET['question2'];
$username = $_SESSION['username'];


//echo $answer1;
//echo $answer2;


if($username)
{
	echo"Hello, ".$username. ", here is your fortune.";	
	playgame($conn,$username,$answer1,$answer2);
}
else
{
	echo "<p>Not logged in</p>";
	echo '<a href="homePage.php" class="btn btn-default">Log In</a>';
}


mysqli_close($conn);


?> 

	<p>Click "My Past Fortunes" to see past fortunes you have received!</p>
	</body>
<footer>
    <nav class="navbar navbar-default navbar-bottom" role="navigation">
      <div class="container">
      </div>
    </nav>
  </footer>


</body>
</html>  
