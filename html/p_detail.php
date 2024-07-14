<?php
include "connection.inc.php";

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id = $id ";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($query);

// echo "<pre>";
// print_r($row);
// echo "</pre>";

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
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
        <!-- ============Header Ends==============  -->


        <!-- ============================== product detail section ============================ -->

        <div id="Prodcut-detail">

            <div class="container">
                <div class="row">
                    <div class="col-lg-1 col-md-3 col-3">
                        <?php
                        $img = json_decode($row['image']);
                        foreach ($img as $image) {
                            ?>
                       
                       <img src="<?php echo $image; ?>" class="img-fluid mb-2 product-thumbnail"
                        alt="Image 1">
                       
                        <?php
                            }
                        ?>

                    </div>
                    <div class="col-lg-5 col-md-9 col-9 m-0">

                        <figure>
                            <img src=" <?php echo $img['0'] ?> " id="main-product-image"
                                class="img-fluid" alt="Main Product Image">
                        </figure>

                    </div>
                    <div class="col-lg-6 col-md-12  col-sm-12">
                        <form action="order_manage.php" method="POST">
                            <h2><?php echo $row['title'] ?> </h2>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <p><?php echo $row['discription'] ?> </p>
                            <h3> RS <?php echo $row['price'] ?> /-</h3>


                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <input type="hidden" name="item_img" value="<?php echo $img['0'] ?>">
                            <input type="hidden" name="title" value="<?php echo $row['title'] ?>">
                            <input type="hidden" name="price" value="<?php echo $row['price'] ?>">
                            <button type="submit" class="btn1" name="add_to_cart">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="Related-product">
            <div class="container">
                <h2 class="text-center my-5 p-2">YOU MIGHT ALSO LIKE</h2>
                <div class="row gap-lg-0 gap-3 gap-md-0 gap-sm-0">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-sm-2 ">
                        <div class="">
                            <figure>
                                <img src="./assets/images/pdetail-img/card img 1.png" alt="">
                            </figure>
                            <div class="card-body">
                                <h4>Nike Jordan m2</h4>
                                <div>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h5 class="d-inline">Rs 499</h5>
                                    <a href="">SHOP NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-4 col-sm-6 mb-sm-2">
                        <div class="">
                            <figure>
                                <img src="./assets/images/pdetail-img/card img 2.png" alt="">
                            </figure>
                            <div class="card-body">
                                <h4>Nike Jordan m2</h4>
                                <div>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h5 class="d-inline">Rs 499</h5>
                                    <a href="">SHOP NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 mb-sm-2">
                        <div class="">
                            <figure>
                                <img src="./assets/images/pdetail-img/card img 3.png" alt="">
                            </figure>
                            <div class="card-body">
                                <h4>Nike Jordan m2</h4>
                                <div>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h5 class="d-inline">Rs 499</h5>
                                    <a href="">SHOP NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 mb-sm-2">
                        <div class="">
                            <figure>
                                <img src="./assets/images/pdetail-img/card img 1.png" alt="">
                            </figure>
                            <div class="card-body">
                                <h4>Nike Jordan m2</h4>
                                <div>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h5 class="d-inline">Rs 499</h5>
                                    <a href="">SHOP NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>

        <!-- =========================section 1.7 ================================ -->
        <section id="Testimonial">
            <div class="container">
                <h2 class="text-center">CUSTOMER REVIEW</h2>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="p-3 rounded-4">
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex gap-4 align-items-center">
                                    <figure>
                                        <img src="./assets/images/index/testi image 2(a).webp" alt="">
                                    </figure>
                                    <div class="d-flex flex-column gap-2">
                                        <div class="ps-2">
                                            <h3>Jimmy</h3>
                                            <p>1 jan 2024</p>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    This product is is so good watch qulity is good and it
                                    primum look attract everyman highly recommanded must buy
                                    this watch price is also so good and afordable.
                                </p>
                                <div class="rev-img d-flex flex-wrap gap-3">
                                    <figure>
                                        <img src="./assets/images/index/testi image 2.webp" alt="">
                                    </figure>
                                    <figure>
                                        <img src="./assets/images/index/testi image 2.webp" alt="">
                                    </figure>
                                    <figure>
                                        <img src="./assets/images/index/testi image 2.webp" alt="">
                                    </figure>
                                    <figure>
                                        <img src="./assets/images/index/testi image 2.webp" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="p-3 rounded-4">
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex gap-4 align-items-center">
                                    <figure>
                                        <img src="./assets/images/index/testi image 1 (a).webp" alt="">
                                    </figure>
                                    <div class="d-flex flex-column gap-2">
                                        <div class="ps-2">
                                            <h3>Jimmy</h3>
                                            <p>1 jun 2024</p>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    This product is is so good watch qulity is good and it
                                    primum look attract everyman highly recommanded must buy
                                    this watch price is also so good and afordable.
                                </p>
                                <div class="rev-img d-flex flex-wrap gap-3">
                                    <figure>
                                        <img src="./assets/images/index/testi img 1.webp" alt="">
                                    </figure>
                                    <figure>
                                        <img src="./assets/images/index/testi img 1.webp" alt="">
                                    </figure>
                                    <figure>
                                        <img src="./assets/images/index/testi img 1.webp" alt="">
                                    </figure>
                                    <figure>
                                        <img src="./assets/images/index/testi img 1.webp" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
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