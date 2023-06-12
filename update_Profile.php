<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halping Hand|Home</title>
        <link rel="stylesheet" href="css/bootstrap.css">
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
                        <a class="nav-link active me-3" aria-current="page" href="#">How it works</a>
                      </li>
                      
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle me-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Cooking</a></li>
                          <li><a class="dropdown-item" href="#">Cleaner</a></li>
                          
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link me-3"  href="#">Feedback</a>
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
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <!-- <div class="reg">
                            <div class="reg-img1" ><img src="Photos/login-1.png" alt="" height="200px" width="200px"></div>
                        </div> -->
                    </div>
                    <div class="col-6">
                        <div class=" regi bg-gray p-20">
                            <form action="update_Profiledb.php" method="POST">
                                <h5>Update_information</h5><br>
                                <label for="" >Email ID</label><br>
                                <input  type="email" name="email" placeholder="Enter Email ID" required><br><br>
                                <label for="" >Full Name</label><br>
                                <input  type="text" name="name" placeholder="What is your name?" required ><br><br>
                                <label for="">Password</label><br>
                                <input type="password" name="password" placeholder="Enter Password" required><br><br>
                                <!-- <label for="">Confirm Password</label><br>
                                <input type="password" name="con_password" placeholder="Enter Confirm Password" required><br><br> -->
                                <label for="">Mobile Number</label><br>
                                <input type="number" name="mobile_number" placeholder="Enter Mobile Number" required><br><br>
                                <label for="">Address</label><br>
                                <input type="text" name="address" placeholder="Enter Mobile Number" required><br><br> 
                                <!-- <p>Already have an account? <a href="login.php">login</a> </p> -->
                                
                                <input type="submit" name="sub" value="Update">
                                <!-- <button class="btn btn-primary" type="submit">Register Now</button> -->
                                <!-- <div class="anAccount">Already Registered? <a href="login.html">Log In</a></div> -->
                            </form>
                        </div>
                    </div>
                    <!-- <div class="col-3">
                        <div class="reg-img1" ><img src="Photos/login-2.png" alt="" height="200px" width="200px"></div>

                    </div> -->
                   
                </div>
            </div>
        </section>
        

     
    </main>

    <!-- main section end  -->

    
</body>
</html>