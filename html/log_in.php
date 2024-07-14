<?php
include "connection.inc.php";

if (isset($_POST['frm'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
    $query_run = mysqli_query($conn, $sql);
    $result = mysqli_num_rows($query_run);
    $row = mysqli_fetch_assoc($query_run);
    
    if ($result == 1) {
        // Set session variables
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['fname'] = $row['fname'];
        if ($row['cart_data']!=NULL) {
            $_SESSION['cart'] = json_decode($row['cart_data'],TRUE);
        }
        header("location:index.php");
        exit();
    } else {
        // Handle invalid login
        echo "Invalid email or password.";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log-in </title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trendhive</title>
        <!-- ======= Custom Css File ========== -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- ======= Responsieess File ========== -->
        <link rel="stylesheet" href="assets/css/responsive.css">
        <!-- ========== Bootstrap Css ========== -->
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <!-- ========== Bootstrap Icons Css ========== -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <!-- ========== Font Awesome CDN ============= -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <!-- ========== Slick Slider Css ============= -->
        <link rel="stylesheet" href="assets/css/slick/slick.css">
        <link rel="stylesheet" href="assets/css/slick/slick-theme.css">


        <!-- =============== bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>

    <body>
        <?php

        include "header.php";
        
        ?>
        <div class="site-wrapper">
            <div class="container">
                <div class="row text-center d-flex justify-content-center">
                    <div id="Log-in">

                        <div>
                            <div class="user-icons">
                                <i class="bi bi-person-circle"></i>
                            </div>

                            <form method="POST" enctype="multipart/form-data">
                                <div class="gap-3 d-flex flex-column align-items-center">
                                    <h4>LOG IN</h4>
                                    <div class="col-lg-10 cl-md-12">
                                        <input type="text" class="form-control" name="email" placeholder="EMAIL"
                                            aria-label="First name">
                                    </div>
                                    <div class="col-lg-10 cl-md-12">
                                        <input type="password" class="form-control" name="password"
                                            placeholder="PASSWORD" aria-label="First name">
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" name="frm">Sign In</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>










        <!-- /* =====  . Footer Start  ====== */ -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <h3>Logo</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. nec
                            nisi dictum vestibulum. Nullam auctor justo vitae libero
                            consectetur, in gcies
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <div class="d-flex gap-5 justify-content-center text-center">
                            <div class="text-left">
                                <h4>Explore</h4>
                                <a href="#">Clothes</a>
                                <a href="#">Shoes</a>
                                <a href="#">Shirts</a>
                                <a href="#">Bags</a>
                            </div>
                            <div class="text-left">
                                <h4>Know us</h4>
                                <a href="#">Best qulity</a>
                                <a href="#">Products</a>
                                <a href="#">Sale</a>
                            </div>
                            <div class="text-left">
                                <h4>More</h4>
                                <a href="#">blogs</a>
                                <a href="#">Reviews</a>
                                <a href="#">Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 pt-5">
                        <input type="text" placeholder="News letter">
                        <button>Search</button>
                        <div class="float-end pt-5">
                            <i class="fa-brands fa-instagram"></i>
                            <i class="fa-brands fa-facebook"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-youtube"></i>
                            <i class="fa-brands fa-linkedin-in"></i>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </footer>
        <!-- /* =====  . Footer End  ====== */ -->
        </div>





        <script>
            document.addEventListener('scroll', () => {
                const navbar = document.getElementsByClassName('navbar')
                if (window.scrollY > 0) {
                    navbar.classList.add('scrolled')
                } else {
                    navbar.classList.remove('scrolled')

                }
            })
        </script>


        <!-- =======Jquery files======== -->
        <script src="assets/js/jquery/jquery.js"></script>
        <!-- =======Slick Js files======== -->
        <script src="assets/js/slick/slick.js"></script>
        <script src="assets/js/slick/slick.min.js"></script>

        <!-- =======Bootstrap Js File======== -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="./assets/js/script.js"></script>
    </body>

    </html>
</body>

</html>