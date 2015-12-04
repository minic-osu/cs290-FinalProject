<?php 
  session_start();


  include 'connectivity.php';


  $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
  $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

  $username = $_SESSION['username'];
  $id_query = mysqli_query("SELECT id FROM student WHERE username = '$username'");
  $id_query3 = mysqli_fetch_array($id_query);
  $id_query4 = $id_query3['id'];
  var_dump($id_query4);

  mysqli_query("DELETE FROM fortune WHERE id = '$id_query4'", $con);
  
 

// your datebase connection and delete logic goes here

// if delete successful we print this
	echo "done"; 


?>