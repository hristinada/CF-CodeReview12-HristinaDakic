<?php
  ob_start();
  session_start();
  require_once 'dbconnect.php';

  //if session is not set this will redirect to login page
  if( !isset($_SESSION[ 'user' ]) ) {
   header("Location: index.php");
   exit;
  }

  //select logged-in users details
  $res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['user']);

  $userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);

?>
  