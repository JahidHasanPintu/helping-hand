<?php include("db.php"); ?>
<?php include('includes/header.php'); ?>

<?php
// Assuming you have already established a database connection and stored it in the $conn variable

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $userName = $_POST['userName'];
  $message = $_POST['message'];
  $rating = $_POST['rating'];

  // Insert feedback into the database
  $query = "INSERT INTO feedbacks (user_name, message, rating) VALUES ('$userName', '$message', $rating)";
  if (mysqli_query($conn, $query)) {
    // Feedback submitted successfully
    echo '<div class="vh-100 d-flex justify-content-center align-items-center">';
    echo '<div class="col-md-4">';
    echo '<div class="border border-3 border-success"></div>';
    echo '<div class="card  bg-white shadow p-5">';
    echo '<div class="mb-4 text-center">';
    echo '<svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">';
    echo '<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />';
    echo '<path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />';
    echo '</svg>';
    echo '</div>';
    echo '<div class="text-center">';
    echo '<h1>Thank You !</h1>';
    echo '<p>We accept your valuable feedback. It helps us a lot!</p>';
    echo '<a href="index.php" class="btn btn-outline-success">Back Home</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

    // Redirect to feedback.php after 5 seconds
    echo '<script>';
    echo 'setTimeout(function() {';
    echo 'window.location.href = "feedback.php";';
    echo '}, 5000);';
    echo '</script>';
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}
?>

<?php include('includes/footer.php'); ?>
