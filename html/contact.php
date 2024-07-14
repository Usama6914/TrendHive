<?php
include "connection.inc.php";
include "Contact_us.html";

if(isset($_POST['frm'])){
    $name= $_POST["name"];
    $email= $_POST["email"];
    $message= $_POST["message"];

    $sql = "INSERT INTO contactus(`name`,`email`,`message`) VALUES('$name','$email','$message')";
    $check = mysqli_query($conn,$sql);
if($check)
echo "<script>alert('Thank you for your Interest, our Team will Contact you shortly');</script>";
else
echo "<script>alert('Some thing went wrong, try again later');</script>";
}
?>