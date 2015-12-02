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
			$fortune = "Good things are going to start coming your way";
			echo "<p>Your fortune is ".$fortune;
			$query = "SELECT fortune_desc FROM fortune WHERE username = '$username'";
			if(!$query)
			{
				echo"<p>Could not find the query in the database</p>";

			}
			else{	
			$databasecon = mysqli_query($conn,$query);
			$fortune_old = mysqli_fetch_array($databasecon);
			//	if(!$fortune_old)
			//		echo "no row";
			//	else
			//		echo "yes row".$fortune_old;

			//concat string (old and new)
			$fortune2 = $fortune_old['fortune_desc'];
			$fortune2 .= $fortune;	//string concat
			echo "<p>The new fortune is </p>".$fortune2;
		
				//UPDATE:
				$final_score = "UPDATE Users SET fortune_desc=$fortune WHERE username='$username'";
				if(!$final_score)
					echo"<p>Could not update database with new fortune</p>";

				else
					$result = mysqli_query($conn,$final_score);

				echo"<p>If you would like to play again, click play again!<p>";
				echo '<a href="homePage.php" target="blank" >Play Again</a>';  

			}

		


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
	echo"You are logged in as ".$username;	
	playgame($conn,$username,$answer1,$answer2);
}
else
{
	echo "<p>Not logged in</p>";
	echo '<a href="homePage.php" target="blank" >Log In</a>';
}


mysqli_close($conn);


?>
