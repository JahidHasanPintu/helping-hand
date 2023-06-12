<?php include("db.php"); ?>
<?php 

// session_start();


?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
<div class="row">
    <?php
          $query = "SELECT * FROM feedbacks";
          $result_feedback = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_feedback)) { ?>

          <div class="col-4">
              <div class="card" >
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row['user_name']; ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $row['created_at']; ?></h6>
                  <p class="card-text"><?php echo $row['message']; ?></p>
                  
                </div>
              </div>
            </div>


          <?php } ?>


    
  </div>  

</main>


