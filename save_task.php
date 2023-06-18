<?php

include('db.php');
// session_start();
// if (!isset($_SESSION['username'])) {
//   header("Location: index.php");
// }

if (isset($_POST['add_servent'])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $nid_number = $_POST['nid_number'];
  $address = $_POST['address'];
  $comments = $_POST['comments'];
  $image = $_POST['image'];
  $query = "INSERT INTO `servents`( `name`, `phone`, `nid_number`, `address`, `comments`, `picture`) VALUES ('$name','$phone','$nid_number','$address','$comments','$image')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Servant added Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: home.php');

}

?>
