<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/registerdb.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: profile.php");
            exit;
        }
    }
    
    $is_invalid = true;
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
                    <a class="nav-link ">Login</a>
                   
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
            <div class="container">
                <div class="row">
                    <div class="col-6 h-300 mt-30 p-20">
                        <div class="login">
                        <div  class="back-img1"><img src="Photos/login-1.png" alt="" height="150px" width="150px"></div>
                        <div  class="back-img2"><img src="Photos/login-2.png" alt="" height="150px" width="150px"></div>

                        </div>
                    </div>

                    <?php if ($is_invalid): ?>
                    <em>Invalid login</em>
                    <?php endif; ?>
                    <div class="col-6 p-20 ">
                        <div class="box bg-gray">
                         <form method="POST">  <!-- action="logindb.php" -->
                            <h5>LogIn</h5><br><br><br>
                            <label for="" >Email ID</label><br>
                            <input  type="email" name="email" placeholder="Enter Email ID"  id="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>"><br><br>
                            <label for="">Password</label><br>
                            <input type="password" name="password" placeholder="Enter Password" ><br>
                            
                            <span class="forget">ForgetPassword?</span> <br> <br>
                            <button class="btn btn-primary" type="submit">Login</button><br> <br>
                            <div class="anAccount">Don't have an account? <a href="register.php">Sign Up</a></div>
                        </form>
                    </div>
                </div>
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