<?php

include('db.php');
// session_start();
// if (!isset($_SESSION['username'])) {
//   header("Location: index.php");
// }

if (isset($_POST['add_feedback'])) {
  $title = $_SESSION['username'] ;
  $fmessage = $_POST['message'];
  $query = "INSERT INTO feedbacks(user_name,message) VALUES ('$title','$fmessage')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Thanks for your feed back';
  $_SESSION['message_type'] = 'success';
  header('Location: feedback.php');

}

?>
