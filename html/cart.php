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

    <?php
        include "header.php";
        ?>

        <div id="cart">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9 col-sm-12">
                        <h2>Shoping Cart</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if(isset($_SESSION['cart'])){
                                        foreach ($_SESSION['cart'] as $key => $value) {
                                            echo "
                                            <tr>
                                                <td><img src='" . $value['item-img'] . "' alt='img' class='img-fluid' width='100' height='100'></td>
                                                <td>" . $value['title'] . "</td>
                                                <td>" . $value['price'] . " <input type='hidden' class='iprice' value=' ".$value['price']." '></td>
                                                <td>
                                                    <form action='order_manage.php' method = 'POST'>
                                                        <input type='number' class='text-center iquantity' name='quantity' onchange='this.form.submit()' value=".$value['quantity']." min='1' max='10'>
                                                        <input type='hidden' name='id' value=".$value['id'].">
                                                    </form>
                                                </td>
                                                <td class= 'itotal'></td>
                                                <td>
                                                <form action='order_manage.php' method = 'POST'>
                                                    <button name='remove_item' class='btn btn-outline-danger'>Remove</button>
                                                    <input type='hidden' name='id' value=".$value['id'].">
                                                </form>
                                                </td>
                                            </tr>";                                
                                    }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="border bg-light rounded p-3">
                            <h4>Grand Total</h4>
                            <h4 class="text-end" id="gtotal"></h4>
                            <?php
                            if (isset($_SESSION['cart']) && count($_SESSION['cart'])>0) {    
                            ?>
                            <form action="purchase.php" method="POST">
                                <div class="my-3">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control"  placeholder="Full Name">
                                </div>
                                <div class="mb-3">
                                    <label>Contact Number</label>
                                    <input type="text" name="phone" class="form-control"  placeholder="Contact Number">
                                </div>
                                <div class="mb-3">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control"  placeholder="Address">
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pay-mod" value="COD" id="pay-mod">
                                    <label class="form-check-label m-0" for="pay-mod">
                                        COD
                                    </label>
                                </div>
                                <!-- <div class="form-check">
                                    <input class="form-check-input" type="radio" name="pay-mod" value="Stripe" id="pay-mod">
                                    <label class="form-check-label m-0" for="pay-mod">
                                        Stripe
                                    </label>
                                </div> -->
                                <input type="hidden" id="t_bill" name="t_bill" value="">
                                <br>
                                <button class="btn btn-outline-primary w-100" name="purchase">Buy Now</button>
                            </form>
                            <?php
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

























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



    <script src="./assets/js/script.js"></script>

<script>
    let gt=0;
    let iprice = document.getElementsByClassName('iprice');
    let iquantity = document.getElementsByClassName('iquantity');
    let itotal = document.getElementsByClassName('itotal');
    let gtotal = document.getElementById('gtotal');
    function subTotal() {
        gt=0;
        for (let i = 0; i < iprice.length; i++) {
            itotal[i].innerText = (iprice[i].value)*(iquantity[i].value);
            gt+=(iprice[i].value)*(iquantity[i].value);
        }
        let t_bill = document.getElementById('t_bill');
        t_bill.value = gt;
        gtotal.innerText=gt;
    }

    subTotal();
</script>

</body>

</html>