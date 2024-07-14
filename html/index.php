<?php
include "connection.inc.php"; // Establish the database connection
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

function t_products($slid, $num, $conn) {
    for ($i = 0; $i < $slid; $i++) {
        $p_id = rand(1, $num);
        $sql = "SELECT * FROM products WHERE id = $p_id";
        $query_run = mysqli_query($conn, $sql);
        if ($query_run) {
            while ($row = mysqli_fetch_array($query_run)) {
                $img = json_decode($row['image']);
                echo ("<a href='p_detail.php?id=" . $row['id'] . "'>
                <div class='slide'>
                <figure class='position-relative'>
                    <img src='" . $img[0] . "' alt='product'>
                    <div class='p-hover'>
                        <p>" . $row['title'] . "</p>
                        <span>
                            <i class='fa-solid fa-star'></i>
                            <i class='fa-solid fa-star'></i>
                            <i class='fa-solid fa-star'></i>
                            <i class='fa-solid fa-star'></i>
                            <i class='fa-solid fa-star'></i>
                        </span>
                        <p>Rs " . $row['price'] . "/-</p>
                    </div>
                </figure>
            </div></a>");
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}



function all_products($slid, $num, $conn) {
    for ($i = 0; $i < $slid; $i++) {
        $p_id = rand(1, $num);
        $sql = "SELECT * FROM products WHERE id = $p_id";
        $query_run = mysqli_query($conn, $sql);
        if ($query_run) {
            while ($row = mysqli_fetch_array($query_run)) {
                $img = json_decode($row['image']);
                echo ("<div class='card'>
                                    <figure><img src=' " . $img[0] . " ' alt='Image'></figure>
                                    <div class='card-body rounded-bottom-1'>
                                        <h6>" . $row['title'] . " </h6>
                                        <div class='d-flex justify-content-between align-items-center mt-2'>
                                             <h5>Rs" . $row['price'] . "</h5>
                                             <a href=' p_detail.php?id= " . $row['id'] . "  '>Shop Now</a>
                                        </div>
                                    </div>
                            </div>");
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}

// function all_products(){
//     include "connection.inc.php";
//         $sql = "SELECT * FROM products";
//         $query_run = mysqli_query($conn, $sql);
//             while ($row = mysqli_fetch_array($query_run)) {
//                 $img = json_decode($row['image']);
//                 echo ("     <div class='card'>
//                                     <figure><img src=' " . $img[0] . " ' alt='Image'></figure>
//                                     <div class='card-body rounded-bottom-1'>
//                                         <h6>" . $row['title'] . " </h6>
//                                         <div class='d-flex justify-content-between align-items-center mt-2'>
//                                             <h5>Rs" . $row['price'] . "</h5>
//                                             <a href=' p_detail.php?id= " . $row['id'] . "  '>Shop Now</a>
//                                         </div>
//                                     </div>
//                                 </div>");
// }
// }
?>




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
</head>

<body>
    <div class="site-wrapper">
        <!-- ============Header Starts============== -->
        <?php
        include "header.php";
        ?>
        <!-- ============Header Ends============== -->
        <!-- ============ 1.1  Hero Section============== -->
        <section id="Hero">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div>
                            <h1>
                                <span>Revamp</span>
                                <br>
                                Your Style
                            </h1>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
                                in placeat rem maxime!
                            </p>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div>
                            <h1>
                                <span>Revamp</span>
                                <br>
                                Your Style
                            </h1>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
                                in placeat rem maxime!
                            </p>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div>
                            <h1>
                                <span>Revamp</span>
                                <br>
                                Your Style
                            </h1>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
                                in placeat rem maxime!
                            </p>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div>
                            <h1>
                                <span>Revamp</span>
                                <br>
                                Your Style
                            </h1>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
                                in placeat rem maxime!
                            </p>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ============ 1.1.1  Hero footer============== -->
        <section id="Herofooter" class="d-flex justify-content-around flex-wrap">
            <div class="d-flex align-items-center gap-md-4 gap-2">
                <figure>
                    <img src="assets/images/products/accessories/earings.webp" alt="imgs">
                </figure>
                <p>Earings</p>
            </div>
            <div class="d-flex align-items-center gap-md-4 gap-2">
                <figure>
                    <img src="assets/images/products/accessories/bracelete.webp" alt="imgs">
                </figure>
                <p>Braceletes</p>
            </div>
            <div class="d-flex align-items-center gap-md-4 gap-2">
                <figure>
                    <img src="assets/images/products/accessories/rings.webp" alt="imgs">
                </figure>
                <p>Rings</p>
            </div>
            <div class="d-flex align-items-center gap-md-4 gap-2">
                <figure>
                    <img src="assets/images/products/watches/watch2.webp" alt="imgs">
                </figure>
                <p>Watches</p>
            </div>
        </section>

        <!-- /* =====  1.2 Catalog  Start  ====== */ -->
        <div id="Catalog">
            <div class="container">
                <div class="row justify-content-center">
                    <h1 class="catalog-p">CATALOG</h1>
                    <div class="col-lg-4">
                        <figure>
                            <img class="test" src="assets/images/index/catalog-img1.webp" alt="img1">
                            <div class="shop-now">
                                <a href="products.php?category='women' ">Women's</a>
                            </div>
                        </figure>
                        <figure>
                            <img src="assets/images/index/catalog-imag4.webp" alt="img4">
                            <div class="shop-now">
                                <a href="products.php?category='men' ">Men's</a>
                            </div>
                        </figure>
                    </div>
                    <div class="col-lg-3">
                        <figure>
                            <img src="assets/images/index/catalog-img2.webp" alt="img2">
                            <div class="shop-now">
                                <a href="products.php?category='watches' ">Watch's</a>
                            </div>
                        </figure>
                    </div>
                    <div class="col-lg-4">
                        <figure>
                            <img src="assets/images/index/catalog-img3.webp" alt="img3">
                            <div class="shop-now">
                                <a href="products.php?category='accessories' ">Accessories</a>
                            </div>
                        </figure>
                        <figure>
                            <img src="assets/images/index/hero1.webp" alt="img5">
                            <div class="shop-now">
                                <a href="products.php?category='footwear' ">FootWear</a>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <!-- /* =====  1.2 Catalog  Start  ====== */ -->

        <!-- ============ 1.4 Our Products============== -->
        <section id="Products">
            <h1>Trending</h1>
            <div class="slider">
                <div class="slide-track">
                
                    <?php
                    t_products(10, $num, $conn);
                    ?>

                </div>
                <div class="slide-track slide-rev">
                    <?php
                    t_products(10, $num, $conn);
                    ?>  
                </div>
                <div class="slide-track">
                    <?php
                    t_products(10, $num, $conn);
                    ?>
                </div>
            </div>

        </section>
        <!-- ====================== section 1.5 ==================== -->
        <section id="Cards">
            <div class="container">
                <div class="row justify-content-center gap-lg-0 gap-3">
                    <div class="col-lg-6 gap-lg-0 gap-3">
                        <div class="d-flex border">
                            <div>
                                <h2>Comfy Style For Her</h2>
                                <p>
                                    Make your girl more comfy by seeing our product for her make
                                    her happy Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Sed non risus. Suspendisse
                                </p>
                                <div class="lowerdiv">
                                    <img src="assets/images/index/Ellipse 11.webp" alt="img">
                                    <div>
                                        <a href="products.php?category='women' ">More <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>

                                </div>
                            </div>
                            <figure>
                                <img src="assets/images/index/image 31.webp" alt="img">
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex">
                            <div>
                                <h2>Comfy Style For Him</h2>
                                <p>
                                    Make your girl more comfy by seeing our product for her make
                                    her happy Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Sed non risus. Suspendisse
                                </p>
                                <div class="lowerdiv">
                                    <img src="assets/images/index/Ellipse 11 (1).webp" alt="img">
                                    <div>

                                        <a href="products.php?category='men' ">More <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>

                                </div>
                            </div>
                            <figure>
                                <img src="assets/images/index/image 32.webp" alt="img">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= section 1.6 ===================== -->
        <section id="Watches">
            <div class="container-fluid">
                <div class=" d-flex justify-content-between align-items-center m-0">
                    <h1>For You</h1>
                    <a href="products.php">See All</a>
                </div>
                <div class="row">
                    <div class="d-flex justify-content-center flex-wrap gap-1">
                        <?php
                            echo all_products(18, $num, $conn);
                        ?>
                    </div>
                </div>
            </div>

        </section>




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