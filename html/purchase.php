<?php
session_start();
include "connection.inc.php";
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (isset($_POST['purchase'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $pay_mod = $_POST['pay-mod'];
        $t_bill = $_POST['t_bill'];

        $sql = "INSERT INTO `order_manager`(`name`, `phone`, `address`, `pay_mod`,`t_bill`) VALUES ('$name','$phone','$address','$pay_mod','$t_bill')";
        $query_run = mysqli_query($conn,$sql);
            if($query_run){
                $order_id= mysqli_insert_id($conn);
                $sql2 = "INSERT INTO `order_detail`(`order_id`, `item_id`, `title`, `price`, `quantity`) VALUES (?, ?, ?, ?, ?)";
                $stmt = mysqli_prepare($conn,$sql2);
                if ($stmt) {
                    foreach ($_SESSION['cart'] as $key => $value) {
                        $item_id = $value['id'];
                        $title = $value['title'];
                        $price = $value['price'];
                        $quantity = $value['quantity'];
                        mysqli_stmt_bind_param($stmt,'iisii',$order_id,$item_id,$title,$price,$quantity);
                        mysqli_stmt_execute($stmt);
                        }
                    echo "<script>
                    alert('Order Placed Successfully')
                    window.location.href = 'cart.php';
                    </script>";
                    
                }
                else {
                    echo "<script>alert('Statement Preparation Error')</script>";
                }
            }
            else echo "<script>alert('Order Placement Failed')</script>";
    }
}

?>