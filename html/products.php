<?php
include "connection.inc.php";

if (isset($_GET['category'])) {
    $category = $_GET['category'];
} else {
    $category = null;
}
$show = "";
if ($category) {
    $sql = "SELECT * FROM products WHERE category = $category ";
    $query_run = mysqli_query($conn,$sql);
}
else {
    $sql = "SELECT * FROM products";
    $query_run = mysqli_query($conn,$sql);
}

while ($row = mysqli_fetch_array($query_run)) {
    $img = json_decode($row['image']);
    $show .= "
    <a href='p_detail.php?id= " . $row['id'] . " '>
    <div class='card'>
    <figure><img src=" . $img[0] . " alt='img1'></figure>
    <div class='card-body rounded-bottom-1'>
        <h6>" . $row['title'] . " </h6>
        <i class='fa-solid fa-star'></i>
        <i class='fa-solid fa-star'></i>
        <i class='fa-solid fa-star'></i>
        <i class='fa-solid fa-star'></i>
        <div class='d-flex justify-content-between mt-1'>
            <h5>Rs " . $row['price'] . "</h5>
        </div>
    </div>
</div>
</a>
    ";
}


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
    
</head>

<body>
    <div class="site-wrapper">
        <!-- ============Header Starts============== -->
        <?php
        include "header.php";
        ?>
        <!-- ============Header Ends============== -->
        <!-- ============ 1.1  Hero Section============== -->
        <section id="Product-hero">
                    <h1>Welcome to our eCommerce store!</h1>
                    <p>Explore our latest collection of clothing.</p>
        </section>


        <!-- ============ 2.3 Products Card Section============== -->
        <section id="Products-card">
            <div class="container">
                <div class="d-flex gap-4 flex-wrap justify-content-center">
                    <?php
                    echo $show;
                    ?>
                </div>
            </div>
        </section>

        <!-- ============ 2.3 Products Card Section End============== -->


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

        
        var category = <?php echo $category; ?>;
        console.log(category);
        let hero = document.getElementById("Product-hero")
        let h1 = document.querySelector("#Product-hero h1")
        if (category == "women") {
            hero.style.background = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3)), url(assets/images/products/women/women.jpg)';
            hero.style.backgroundSize = "cover";
            h1.textContent = "Welcome to Women's Appearal";
       }else 
       if(category == "men"){
            hero.style.background = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3)), url(assets/images/products/men/men.jpg)';
            hero.style.backgroundSize = "cover";
            h1.textContent = "Welcome to men's Appearal";
       }else 
       if(category == "accessories"){
            hero.style.background = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3)), url(assets/images/products/accessories/bgbag.jpg)';
            hero.style.backgroundSize = "cover";
            h1.textContent = "Welcome to Women's Accessories";
       }else
        if(category == "footwear"){
            hero.style.background = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3)), url(assets/images/products/footwear/footwear.jpg)';
            hero.style.backgroundSize = "cover";
            h1.textContent = "Welcome to Footwear section";
       }else
        if(category == "watches"){
            hero.style.background = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3)), url(assets/images/products/watches/bgwatch.jpg)';
            hero.style.backgroundSize = "cover";
            h1.textContent = "Welcome to Watches section";
       }
    </script>


    

    <!-- =======Bootstrap Js File======== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/script.js"></script>
</body>

</html>