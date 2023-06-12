<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halping Hand</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="/js/validation.js" defer></script>

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
                    <div class="col-3">
                        <div class="reg">
                            <div class="reg-img1" ><img src="Photos/login-1.png" alt="" height="200px" width="200px"></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class=" regi bg-gray p-20">
                            <form action="process_register.php" method="POST" novalidate id="signup">
                                <h5>Register</h5><br>
                                <label for="" >Full Name</label><br>
                                <input  type="text" id="name" name="name" placeholder="What is your name?"  ><br><br>
                                <label for="" >Email ID</label><br>
                                <input  type="email" id="email" name="email" placeholder="Enter Email ID" ><br><br>
                                <label for="">Password</label><br>
                                <input type="password" id="password" name="password" placeholder="Enter Password" ><br><br>
                                <label for="">Confirm Password</label><br>
                                <input type="password" id="password_confirmation" name="con_password" placeholder="Enter Confirm Password" ><br><br>
                                <label for="">Mobile Number</label><br>
                                <input type="number" id="phone" name="mobile_number" placeholder="Enter Mobile Number" ><br><br>
                                <label for="">Address</label><br>
                                <input type="text" id="address" name="address" placeholder="Enter The address" ><br><br> 
                                <p>Already have an account? <a href="login.php">login</a> </p>
                                
                                <input type="submit" name="sub" value="Register Now">
                                <!-- <button class="btn btn-primary" type="submit">Register Now</button> -->
                                <!-- <div class="anAccount">Already Registered? <a href="login.html">Log In</a></div> -->
                            </form>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="reg-img1" ><img src="Photos/login-2.png" alt="" height="200px" width="200px"></div>

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
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>