<?php include("db.php"); ?>
<?php include('includes/header.php'); ?>

<?php
// Fetch hire_data from the database for the logged-in user
if (isset($_SESSION['email'])) {
  $loggedInUserEmail = $_SESSION['email'];
  $query = "SELECT * FROM hire_data WHERE email = '$loggedInUserEmail'";
  $result = mysqli_query($conn, $query);
  $hireData = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>

<!-- HTML table using Bootstrap -->
<?php if (isset($_SESSION['message'])) { ?>
<div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
  <?= $_SESSION['message'] ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>
<div class="table-responsive w-80">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Servant ID</th>
        <th>Note</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $counter = 1; // Initialize counter variable
      if (isset($hireData) && !empty($hireData)) {
        foreach ($hireData as $hire) {
      ?>
          <tr>
            <td><?php echo $counter++; ?></td>
            <td><?php echo $hire['name']; ?></td>
            <td><?php echo $hire['email']; ?></td>
            <td><?php echo $hire['servent_id']; ?></td>
            <td><?php echo $hire['note']; ?></td>
            <td><?php echo $hire['status']; ?></td>
            <td>
              <a href="changestatus.php?id=<?php echo $hire['id']; ?>" class="btn btn-primary">
                <i class="fas fa-check"></i>
              </a>
              <a href="delete_booking.php?id=<?php echo $hire['id']; ?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
      <?php
        }
      } else {
        echo '<tr><td colspan="7">No hire data found for the logged-in user.</td></tr>';
      }
      ?>
    </tbody>
  </table>
</div>

<?php include('includes/footer.php'); ?>
