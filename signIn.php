<?php
	session_start();
	include 'connectivity.php';
	error_reporting(-1); 
	ini_set('display_errors', 'On');

		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		if ($dbc) {
			echo 'Successfully connected to database';
		}else{
			die('Could not connect.');
		}

		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query = "SELECT username, password FROM student WHERE username='".$username."' AND password='".sha1($password)."' ";
		$res = mysqli_query($dbc, $query);
		$num_row = mysqli_num_rows($res);
		$row=mysqli_fetch_assoc($res);
		if( $num_row == 1 ) {
			
			$_SESSION['username'] = $row['username'];
			$_SESSION['password'] = $row['password'];
			// $_SESSION['losses'] = $row['losses'];
			// $_SESSION['wins'] = $row['wins'];
			}
		else {

			echo http_response_code(400);

		}
		echo 'true';

?>