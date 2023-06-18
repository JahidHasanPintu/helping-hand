<?php include("db.php"); ?>
<?php include('includes/header.php'); ?>



<?php
// Fetch hire_data from the database
$query = "SELECT * FROM hire_data";
$result = mysqli_query($conn, $query);
$hireData = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!-- HTML table using Bootstrap -->
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Servent ID</th>
        <th>Note</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $counter = 1; // Initialize counter variable
      foreach ($hireData as $hire) {
      ?>
        <tr>
          <td><?php echo $counter++; ?></td>
          <td><?php echo $hire['name']; ?></td>
          <td><?php echo $hire['email']; ?></td>
          <td><?php echo $hire['servent_id']; ?></td>
          <td><?php echo $hire['note']; ?></td>
          <td><?php echo $hire['status']; ?></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>


<?php include('includes/footer.php'); ?>