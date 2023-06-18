<?php include('includes/header.php'); ?>
<?php

include("db.php");
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
  }

$loggedInUserName = $_SESSION['username']; 
$loggedInUserEmail = $_SESSION['email'];
// $serventId = intval($_GET['servent_id']); 

if (isset($_POST['hire_servent'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $note = $_POST['note'];
    $serventId = $_POST['servent_id'];
    $status = 'pending'; // Default status
  
    
    $query = "INSERT INTO hire_data (name, email, servent_id, note, status) VALUES ('$name', '$email', '$serventId', '$note', '$status')";

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
      echo '<h1>Successfull !</h1>';
      echo '<p>Your booking is sucessfull and pending we will confirm it</p>';
      echo '<a href="index.php" class="btn btn-outline-success">Back Home</a>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
  
      // Redirect to feedback.php after 5 seconds
      echo '<script>';
      echo 'setTimeout(function() {';
      echo 'window.location.href = "index.php";';
      echo '}, 5000);';
      echo '</script>';
    } else {
      echo "Error: " . mysqli_error($conn);
    }
  }

// Display the form
?>
<form action="hire.php" method="POST">
    <label for="note">Note:</label>
    <textarea id="note" name="note"></textarea>
    <br>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo $loggedInUserName; ?>" readonly>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo $loggedInUserEmail; ?>" readonly>
    <br>
    <input type="hidden" name="servent_id" value="<?php echo intval($_GET['servent_id']); ?>">
    <input type="submit" name='hire_servent' value="Submit">
</form>

<?php include('includes/footer.php'); ?>
