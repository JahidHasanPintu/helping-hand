<?php

include("db.php");
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}


if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM hire_data WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Deleted Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: allbooking.php');
}

?>
