
// $con = mysqli_connect("localhost","root","","helping_hand");
// $a = $_POST['name'];
// $b = $_POST['email'];
// $c = $_POST['password'];
// $d = $_POST['con_password'];
// $e = $_POST['mobile_number'];
// $f = $_POST['address'];



    // $sql = "insert into signup(full_name,email,password,con_password,mobile_number,address) values('$a','$b','$c','$d','$e','$f')";
    // mysqli_query($con,$sql);
    // echo "successfully registered";





<?php

$host = "localhost";
$dbname = "helping_hand";
$username = "root";
$password = "";

$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;

