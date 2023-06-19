<?php
include("db.php");

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // Retrieve the hire_data record by ID
  $query = "SELECT * FROM hire_data WHERE id = '$id'";
  $result = mysqli_query($conn, $query);
  $hireData = mysqli_fetch_assoc($result);

  // Check if the status is already accepted
  if ($hireData['status'] === 'accepted') {
    $_SESSION['message'] = "Booking Already Accepted";
    $_SESSION['message_type'] = "warning";
  } else {
    // Update the status to "accepted"
    $updateQuery = "UPDATE hire_data SET status = 'accepted' WHERE id = '$id'";
    mysqli_query($conn, $updateQuery);

    $_SESSION['message'] = "Booking Accepted";
    $_SESSION['message_type'] = "success";
  }
}

header("Location: allbooking.php"); // Replace "your_previous_page.php" with the page you want to redirect to after changing the status
exit();
?>
