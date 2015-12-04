<?php

  session_start();





  include 'connectivity.php';




  $db=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
  if (!$db) {
      die("Failed to connect to MySQL: " . mysqli_connect_error());
  }



  $username = $_SESSION['username'];

  $id = intval($_POST['id']);
  echo "my ID:";
  var_dump($id);

  // $query = mysqli_query("DELETE FROM fortune WHERE id = '$id'", $db);
  $query = $db->query("DELETE FROM fortune WHERE id = '$id'");
  echo "The query:";
  var_dump($query);
  echo "An error:";
  var_dump($db->error);
  // $id_query = mysqli_query("SELECT id FROM student WHERE username = '$username'");

  // $id_query = mysqli_fetch_array($query);

  // $id_query4 = $id_query3['id'];

  // var_dump($id_query);











// your datebase connection and delete logic goes here



// if delete successful we print this

  echo "done";





?>
