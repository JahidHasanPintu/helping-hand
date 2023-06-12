<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'helping_hand'
) or die(mysqli_erro($mysqli));

?>

