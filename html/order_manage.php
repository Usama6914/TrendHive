<?php
session_start();
include "connection.inc.php";
$user_id = $_SESSION['user_id'];
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (isset($_POST['add_to_cart'])) {
        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != TRUE) {
            echo "<script>alert('You are Not Logged In. Log IN first to make Order')</script>";
            header("location:log_in.php");
        }
        else{
            
            if (isset($_SESSION['cart'])) {
                $cart_item = array_column($_SESSION['cart'],'id');
                if(in_array($_POST['id'],$cart_item)){
                    echo "<script>
                    alert('Item Already Exists');
                    window.location.href = 'p_detail.php?id=".$_POST['id']." ';
                    </script>";
                }
                else{
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array(
                    'id'=> $_POST['id'],
                    'quantity'=> 1,
                    'item-img' => $_POST['item_img'],
                    'title' => $_POST['title'],
                    'price' => $_POST['price'],
                    );
                    
                    $encode_cart = json_encode($_SESSION['cart']);
                    $sql = "UPDATE `users` SET `cart_data`='$encode_cart' WHERE id = '$user_id' ";
                    $query_run = mysqli_query($conn,$sql);
                    if (!$query_run) {
                            echo "Re Bhaya kam na banya, Saman Database main ko ni ja rya";
                    }
                    else{
                        echo "<script>
                        alert('Item Added To Cart');
                        window.location.href = 'p_detail.php?id=".$_POST['id']." ';
                        </script>";
                    }
                }
            }
            else{
                $_SESSION['cart'][0]=array(
                    'id'=> $_POST['id'],
                    'quantity'=> 1,
                    'item-img' => $_POST['item_img'],
                    'title' => $_POST['title'],
                    'price' => $_POST['price'],
                );
                $encode_cart = json_encode($_SESSION['cart']);
                $sql = "UPDATE `users` SET `cart_data`='$encode_cart' WHERE id = '$user_id' ";
                $query_run = mysqli_query($conn,$sql);
                if (!$query_run) {
                    echo "Cart Item Insertion In database failed";
                }
                else{
                    echo "<script>
                    alert('Item Added to Cart');
                    window.location.href = 'p_detail.php?id=".$_POST['id']." ';
                    </script>";
                }
            }
        }
    }


    if (isset($_POST['remove_item'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['id']==$_POST['id']) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                $encode_cart = json_encode($_SESSION['cart']);
                    $sql = "UPDATE `users` SET `cart_data`='$encode_cart' WHERE id = '$user_id' ";
                    $query_run = mysqli_query($conn,$sql);
                    if (!$query_run) {
                        echo "<script>alert('Cart db updation Error')</script>";
                    }
                    else{
                        echo "<script>
                        alert('Item Removed');
                        window.location.href = 'cart.php';
                        </script>";
                    }
            }
        }
    }

    if (isset($_POST['quantity'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['id']==$_POST['id']) {
                $_SESSION['cart'][$key]['quantity'] = $_POST['quantity'];
                echo "<script>
                window.location.href = 'cart.php';
                </script>";
            }
        }
    }


    
}



?>