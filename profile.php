<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/registerdb.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halping Hand</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- header section start  -->

    <header>
        <nav class="navbar navbar-expand-lg bg-secondary-subtle">
            <div class="container-fluid">
              <img src="Photos/logo.png" alt="" class="my-logo" height="60px " width="200px">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav my-nav mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">How it works</a>
                  </li>
                  
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Cooking</a></li>
                      <li><a class="dropdown-item" href="#">Cleaner</a></li>
                      
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Feedback</a>
                  </li>
                  <li class="nav-item">
                    
                   
                  </li>
                  <li>
                    <a class=" navbar-toggler-icon mt-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"></a>

                    </a>
                  </li>
                </ul>
                
                <form class="d-flex" role="search">
                  <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                  <!-- <a href="" class="btn btn-outline navbar-btn"> login</a>
                  <a href="" class="btn btn-outline navbar-btn"> signin</a> -->
                </form>
              </div>
            </div>
          </nav>
         

    </header>
    <!-- header section end  -->

    <!-- main section start  -->

    <main>


    <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        
        <p><a href="logout.php">Log out</a></p>
        
    <?php else: ?>
        
        <p><a href="login.php">Log in</a> or <a href="register.php">sign up</a></p>
        
    <?php endif; ?>
        <section>
        <?php echo "Welcome " . $_SESSION['username'] ; ?>
            <div class="container">
                <div class="row">
                    <div class="col-7">
                        <div class="profile-info mt-30">
                            <img class="man" src="Photos/man.jpg" alt="">
                            <div class="circle">2</div>
                            <div class="circle-red">0</div>

                            <div class="profile-name">
                                Izzak
                            </div>

                            <div class="info-bt">
                                <button type="submit" class="info-b" data-bs-toggle="modal" data-bs-target="#modalReport">Report</button>
                                <button class="info-b">Attendance</button>
                            </div>
                            <div class="profile-icon">
                               
                                <img data-bs-toggle="modal" data-bs-target="#staticBackdrop" src="Photos/profile-icon.png" alt="" height="50px" width="50px">
                            </div>
                        </div>

                    </div>
                    <div class="col-1"></div>
                    <div class="col-4">
                        <!-- <div class="user ">
                            <div class="man-2">
                                <img src="Photos/profile.jpeg" alt="" height="70px" width="70px"
                                    style="border-radius: 50%;">
                            </div>
                            <div class="user-name ">
                                <h2>Name</h2>
                                <a href="update_Profile.php" target="_blank">View & update Profile</a>
                                <br><br>

                            </div>
                            <div class="underline"></div>
                            <div class="logout">
                                <br><br><p> &#9432; Feedback</p><br> <br>
                                <p>Logout</p>

                            </div>
                        </div> -->
                    </div>


                </div>
            </div>
        </section>

       

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <a href="update_Profile.php" target="_blank"><h5 class="offcanvas-title" id="offcanvasRightLabel">View & update Profile</h5></a>
    <!-- <h5 class="offcanvas-title" id="offcanvasRightLabel">Update profile</h5> -->
    
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <a href="feedback.html">Feedback</a>
    <br>
    <a href="logout.php">Logout</a>
    ...
  </div>
</div>




<section>
  <!-- modal for profile detailes -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <img src="Photos/man.jpg" alt="" height="80px" width="80px" class="my-border-redius50 me-5">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Name</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div> -->
    </div>
  </div>
</div>
</section>
<section>
  <!-- modal for report -->

<!-- Modal -->
<div class="modal fade" id="modalReport" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Report on you service</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="">
        <textarea name="" id="" cols="60" rows="10">Write your report</textarea>
        <button class="btn btn-success my-report-button">Submit</button>
       </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div> -->
    </div>
  </div>
</div>
</section>

    </main>

    <!-- main section end  -->


    <!-- footer section start  -->
    <footer>

        <!-- <div style="text-align: center;">&copy; Designed by Mesba</div> -->
    </footer>
    <!-- footer section end  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>