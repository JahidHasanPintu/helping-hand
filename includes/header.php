<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a href="index.php" class="navbar-brand">Helping Hand</a>
    <form class="d-flex">
    <a class="navbar-brand" href="index.php">Home</a>
    <a class="navbar-brand" href="profile.php">Profile</a>
    <a class="navbar-brand" href="home.php">Admin</a>
    <a class="navbar-brand" href="feedback.php">FeedBack</a>
    <span class="navbar-text">
      <?php
      if (isset($_SESSION['username'])) {
          // echo "Welcome " . $_SESSION['username'];
          echo '<a href="logout.php" class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</a>';
      } else {
          echo "&nbsp;";
      }
      ?>
    </span>
  </div>
  <?php
  if (!isset($_SESSION['username'])) {
      echo '<a href="login.php" class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</a>';
  }
  ?>
    </form>
  </div>
</nav>
