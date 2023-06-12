
<?php

include("db.php");


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
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<body>

<?php if (isset($_SESSION['message'])) { ?>
  <?php 
  echo "<script>alert('Feedback recorded successfully')</script>"; ?>
      <?php } ?>

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
                    <span class="navbar-toggler-icon"></span>
                   
                  </li>
                  <li>
                    
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

    

        <section>
        <?php echo "Welcome " . $_SESSION['username'] ; ?>
            <div class="container w-50 me-auto">
            <div class="card card-body">
        <form action="add_feedback.php" method="POST">
          
          <div class="form-group ">
            <textarea name="message" rows="2" class="form-control m-2" placeholder="Tell us your feedback briefly"></textarea>
          </div>
          <input type="submit" name="add_feedback" class="btn btn-success btn-block m-2" value="Submit">
        </form>
      </div>
            </div>
        </section>
        

     
    </main>

    <!-- main section end  -->


    <!-- footer section start  -->
    <footer>

        <div style="text-align: center;">&copy; Designed by Mesba</div>
    </footer>
    <!-- footer section end  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>