<?php
include "connection.inc.php";
include "sign_up.html";

if(isset($_POST["frm"])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $country = $_POST["country"];

    $existsSql = "SELECT * FROM users WHERE email = '$email' ";
    $result = mysqli_query($conn,$existsSql);
    $num = mysqli_num_rows($result);
    if($num > 0){
        echo "<script>alert('User Name Already Exists');</script>";
    }
    else{       
        $sql = "INSERT INTO users(`fname`,`lname`,`phone`,`gender`,`email`,`password`,`address`,`city`,`country`,`cart_data`) VALUES('$fname','$lname','$phone','$gender','$email','$password','$address','$city','$country', NULL)";
    $check = mysqli_query($conn,$sql);
    if ($check) {
        echo "<script>alert('Registeration Successfull');</script>";
    }
    else {
        echo "<script>alert('Registration Failed');</script>";
    }
}
}

?>