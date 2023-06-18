<?php include("db.php"); ?>
<?php include('includes/header.php'); ?>

<head>
  <title>Feedback Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center">
    <h1>Feedbacks</h1>
    <button type="button" class="btn btn-primary mt-4" data-toggle="modal" data-target="#feedbackModal">Give Your Feedback</button>
    </div>
    
    <div class="row mt-4">
      <?php
      // Fetch feedbacks from the database
      $query = "SELECT * FROM feedbacks";
      $result = mysqli_query($conn, $query);
      $feedbacks = mysqli_fetch_all($result, MYSQLI_ASSOC);

      foreach ($feedbacks as $feedback) {
      ?>
        <div class="col-md-4 mb-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?php echo $feedback['user_name']; ?></h5>
              <p class="card-text"><?php echo $feedback['message']; ?></p>
              <p class="card-text">Rating: <?php echo $feedback['rating']; ?></p>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>

    

    <!-- Feedback Modal -->
    <div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="feedbackModalLabel">Give Your Feedback</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Feedback Form -->
            <form method="post" action="submit_feedback.php">
              <div class="form-group">
                <label for="userName">Your Name</label>
                <input type="text" class="form-control" id="userName" name="userName" required>
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
              </div>
              <div class="form-group">
                <label for="rating">Rating</label>
                <select class="form-control" id="rating" name="rating" required>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php include('includes/footer.php'); ?>