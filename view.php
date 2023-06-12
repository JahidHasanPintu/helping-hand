<?php
$con = mysqli_connect("localhost","root","","helping_hand");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halping Hand</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                    <a class="nav-link" href="feedback.html" target="_blank">Feedback</a>
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

     <?php
        $sql = "SELECT * FROM signup;";
        $result = mysqli_query($con, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo $row['email']."<br>";
            }
        }
    ?>
    
</body>
</html>