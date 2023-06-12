<?php
$con = mysqli_connect("localhost","root","","helping_hand");
$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['password'];
// $d = $_POST['con_password'];
$e = $_POST['mobile_number'];
$f = $_POST['address'];



    $sql = "update signup set full_name='$a', password='$c', mobile_number='$e', address='$f' where email='$b'";
    mysqli_query($con,$sql);
    echo "successfully update";



?>

