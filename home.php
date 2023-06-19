<?php include("db.php"); ?>
<?php 

// session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

if ($_SESSION['role'] !== 'admin') {
  $_SESSION['message'] = "You don't have permission to access this page.";
  header("Location: index.php");
  exit();
}
?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php } ?>

      <button type="button" class="btn btn-primary mt-4" data-toggle="modal" data-target="#feedbackModal">Add Servent</button>
      <a href="allbooking.php" class="btn btn-primary mt-4" >All Booking</a>
      <!-- ADD TASK FORM -->

  <!-- Feedback Modal -->
  <div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="feedbackModalLabel">Servent Information</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Feedback Form -->
            <div class="card card-body">
        <form action="save_task.php" method="POST">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Servent Name" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="phone" class="form-control" placeholder="Phone Number" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="nid_number" class="form-control" placeholder="NID Number" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="image" class="form-control" placeholder="Paste image link here" autofocus>
          </div>
          <div class="form-group">
            <textarea name="address" rows="2" class="form-control" placeholder="Address"></textarea>
          </div>
          <div class="form-group">
            <textarea name="comments" rows="2" class="form-control" placeholder="Comments"></textarea>
          </div>
          <input type="submit" name="add_servent" class="btn btn-success btn-block" value="Add Servent">
        </form>
      </div>
          </div>
        </div>
      </div>
    </div>
  </div>

      
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
          <th>Image</th>
            <th>Name</th>
            <th>Phone</th>
            <th>NID</th>
            <th>Address</th>
            <th>Comments</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM servents";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
          <td>
            <div class="rounded-circle overflow-hidden" style="width: 50px; height: 50px;">
              <img src="<?php echo $row['picture']; ?>" alt="Image" class="img-fluid rounded-circle" style="object-fit: cover; width: 100%; height: 100%;">
            </div>
          </td>

            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['nid_number']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['comments']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>
