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

			
			$fortune = "Good things are going coming your way";
			echo"<p>Your fortune is ".$fortune;

			$new_query = "INSERT INTO fortune (student_id,fortune_desc) VALUES('$id_query4','$fortune')";
		//	var_dump($new_query);
			if(!$new_query)
				echo"<p>No update to fortune description</p>";
			else
				$new_query2 = mysqli_query($conn,$new_query);
			if(!$new_query2)
				echo"<p>Final query didn't go through</p";

			echo"<p>If you would like to play again, click play again!<p>";
			echo '<a href="homePage.php" target="blank" >Play Again</a>';  
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

			
			$fortune = "Good things are not coming your way";
			echo"<p>Your fortune is ".$fortune;

			$new_query = "INSERT INTO fortune (student_id,fortune_desc) VALUES('$id_query4','$fortune')";
		//	var_dump($new_query);
			if(!$new_query)
				echo"<p>No update to fortune description</p>";
			else
				$new_query2 = mysqli_query($conn,$new_query);
			if(!$new_query2)
				echo"<p>Final query didn't go through</p";

			echo"<p>If you would like to play again, click play again!<p>";
			echo '<a href="homePage.php" target="blank" >Play Again</a>';  
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

			
			$fortune = "You may want to reconsider the decision you're making";
			echo"<p>Your fortune is ".$fortune;

			$new_query = "INSERT INTO fortune (student_id,fortune_desc) VALUES('$id_query4','$fortune')";
		//	var_dump($new_query);
			if(!$new_query)
				echo"<p>No update to fortune description</p>";
			else
				$new_query2 = mysqli_query($conn,$new_query);
			if(!$new_query2)
				echo"<p>Final query didn't go through</p";

			echo"<p>If you would like to play again, click play again!<p>";
			echo '<a href="homePage.php" target="blank" >Play Again</a>';  
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

			
			$fortune = "Be close to those who you love...they may need you";
			echo"<p>Your fortune is ".$fortune;

			$new_query = "INSERT INTO fortune (student_id,fortune_desc) VALUES('$id_query4','$fortune')";
		//	var_dump($new_query);
			if(!$new_query)
				echo"<p>No update to fortune description</p>";
			else
				$new_query2 = mysqli_query($conn,$new_query);
			if(!$new_query2)
				echo"<p>Final query didn't go through</p";

			echo"<p>If you would like to play again, click play again!<p>";
			echo '<a href="homePage.php" target="blank" >Play Again</a>';  
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

			
			$fortune = "Watch your back";
			echo"<p>Your fortune is ".$fortune;

			$new_query = "INSERT INTO fortune (student_id,fortune_desc) VALUES('$id_query4','$fortune')";
		//	var_dump($new_query);
			if(!$new_query)
				echo"<p>No update to fortune description</p>";
			else
				$new_query2 = mysqli_query($conn,$new_query);
			if(!$new_query2)
				echo"<p>Final query didn't go through</p";

			echo"<p>If you would like to play again, click play again!<p>";
			echo '<a href="homePage.php" target="blank" >Play Again</a>';  
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

			
			$fortune = "Pay attention to your surroundings";
			echo"<p>Your fortune is ".$fortune;

			$new_query = "INSERT INTO fortune (student_id,fortune_desc) VALUES('$id_query4','$fortune')";
	//		var_dump($new_query);
			if(!$new_query)
				echo"<p>No update to fortune description</p>";
			else
				$new_query2 = mysqli_query($conn,$new_query);
			if(!$new_query2)
				echo"<p>Final query didn't go through</p";

			echo"<p>If you would like to play again, click play again!<p>";
			echo '<a href="homePage.php" target="blank" >Play Again</a>';  
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

			
			$fortune = "Be generous to those who have less and considerate to those who have more...generosity is a good look for you";
			echo"<p>Your fortune is ".$fortune;

			$new_query = "INSERT INTO fortune (student_id,fortune_desc) VALUES('$id_query4','$fortune')";
		//	var_dump($new_query);
			if(!$new_query)
				echo"<p>No update to fortune description</p>";
			else
				$new_query2 = mysqli_query($conn,$new_query);
			if(!$new_query2)
				echo"<p>Final query didn't go through</p";

			echo"<p>If you would like to play again, click play again!<p>";
			echo '<a href="homePage.php" target="blank" >Play Again</a>';  
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

			
			$fortune = "Be considerate to those around you ";
			echo"<p>Your fortune is ".$fortune;

			$new_query = "INSERT INTO fortune (student_id,fortune_desc) VALUES('$id_query4','$fortune')";
//			var_dump($new_query);
			if(!$new_query)
				echo"<p>No update to fortune description</p>";
			else
				$new_query2 = mysqli_query($conn,$new_query);
			if(!$new_query2)
				echo"<p>Final query didn't go through</p";

			echo"<p>If you would like to play again, click play again!<p>";
			echo '<a href="homePage.php" target="blank" >Play Again</a>';  
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


				$fortune = "Today you will eat something less than $10";
				echo"<p>Your fortune is ".$fortune;

				$new_query = "INSERT INTO fortune (student_id,fortune_desc) VALUES('$id_query4','$fortune')";
			//	var_dump($new_query);
				if(!$new_query)
					echo"<p>No update to fortune description</p>";
				else
					$new_query2 = mysqli_query($conn,$new_query);
				if(!$new_query2)
					echo"<p>Final query didn't go through</p";

				echo"<p>If you would like to play again, click play again!<p>";
				echo '<a href="homePage.php" target="blank" >Play Again</a>';  
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


				$fortune = "The effort you put in may not be recognized";
				echo"<p>Your fortune is ".$fortune;

				$new_query = "INSERT INTO fortune (student_id,fortune_desc) VALUES('$id_query4','$fortune')";
			//	var_dump($new_query);
				if(!$new_query)
					echo"<p>No update to fortune description</p>";
				else
					$new_query2 = mysqli_query($conn,$new_query);
				if(!$new_query2)
					echo"<p>Final query didn't go through</p";

				echo"<p>If you would like to play again, click play again!<p>";
				echo '<a href="homePage.php" target="blank" >Play Again</a>';  
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


				$fortune = "You may need to spend more time on yourself";
				echo"<p>Your fortune is ".$fortune;

				$new_query = "INSERT INTO fortune (student_id,fortune_desc) VALUES('$id_query4','$fortune')";
			//	var_dump($new_query);
				if(!$new_query)
					echo"<p>No update to fortune description</p>";
				else
					$new_query2 = mysqli_query($conn,$new_query);
				if(!$new_query2)
					echo"<p>Final query didn't go through</p";

				echo"<p>If you would like to play again, click play again!<p>";
				echo '<a href="homePage.php" target="blank" >Play Again</a>';  
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


				$fortune = "The things you want may not be the things you need";
				echo"<p>Your fortune is ".$fortune;

				$new_query = "INSERT INTO fortune (student_id,fortune_desc) VALUES('$id_query4','$fortune')";
			//	var_dump($new_query);
				if(!$new_query)
					echo"<p>No update to fortune description</p>";
				else
					$new_query2 = mysqli_query($conn,$new_query);
				if(!$new_query2)
					echo"<p>Final query didn't go through</p";

				echo"<p>If you would like to play again, click play again!<p>";
				echo '<a href="homePage.php" target="blank" >Play Again</a>';  
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


				$fortune = "The lesser of the two evils is still evil";
				echo"<p>Your fortune is ".$fortune;

				$new_query = "INSERT INTO fortune (student_id,fortune_desc) VALUES('$id_query4','$fortune')";
			//	var_dump($new_query);
				if(!$new_query)
					echo"<p>No update to fortune description</p>";
				else
					$new_query2 = mysqli_query($conn,$new_query);
				if(!$new_query2)
					echo"<p>Final query didn't go through</p";

				echo"<p>If you would like to play again, click play again!<p>";
				echo '<a href="homePage.php" target="blank" >Play Again</a>';  
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


				$fortune = "You will face regret and dissapointment once again";
				echo"<p>Your fortune is ".$fortune;

				$new_query = "INSERT INTO fortune (student_id,fortune_desc) VALUES('$id_query4','$fortune')";
			//	var_dump($new_query);
				if(!$new_query)
					echo"<p>No update to fortune description</p>";
				else
					$new_query2 = mysqli_query($conn,$new_query);
				if(!$new_query2)
					echo"<p>Final query didn't go through</p";

				echo"<p>If you would like to play again, click play again!<p>";
				echo '<a href="homePage.php" target="blank" >Play Again</a>';  
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


				$fortune = "You will be happy and sad many times in your life but never alone";
				echo"<p>Your fortune is ".$fortune;

				$new_query = "INSERT INTO fortune (student_id,fortune_desc) VALUES('$id_query4','$fortune')";
			//	var_dump($new_query);
				if(!$new_query)
					echo"<p>No update to fortune description</p>";
				else
					$new_query2 = mysqli_query($conn,$new_query);
				if(!$new_query2)
					echo"<p>Final query didn't go through</p";

				echo"<p>If you would like to play again, click play again!<p>";
				echo '<a href="homePage.php" target="blank" >Play Again</a>';  
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


				$fortune = "Those around you have a deep influence over you";
				echo"<p>Your fortune is ".$fortune;

				$new_query = "INSERT INTO fortune (student_id,fortune_desc) VALUES('$id_query4','$fortune')";
			//	var_dump($new_query);
				if(!$new_query)
					echo"<p>No update to fortune description</p>";
				else
					$new_query2 = mysqli_query($conn,$new_query);
				if(!$new_query2)
					echo"<p>Final query didn't go through</p";

				echo"<p>If you would like to play again, click play again!<p>";
				echo '<a href="homePage.php" target="blank" >Play Again</a>';  
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
