<?php
session_start();
?>



<header class="sticky-top">
            <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand show" href="#">Navbar</a>
                    <button class="open-aside" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 gap-lg-4 gap-md-3 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home
                                </a>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu bg-black">
                                    <li><a class="dropdown-item" href="products.php?category='men' ">Mens</a></li>
                                    <li><a class="dropdown-item" href="products.php?category='women' ">Women</a></li>
                                    <li><a class="dropdown-item" href="products.php?category='accessories' ">Accessories</a></li>
                                    <li><a class="dropdown-item" href="products.php?category='watches' ">Watches</a></li>
                                    <li><a class="dropdown-item" href="products.php?category='footwear' ">Footwear</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="contact.php">Contact Us
                                </a>
                            </li>

                        </ul>
                        <a class="navbar-brand hide mx-auto" href="index.php">TrendHive</a>
                        <div class="d-flex align-items-center gap-lg-5 gap-md-3">
                            <form class="d-flex" role="search">
                                <i class="bi bi-search"></i>
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                            </form>
                            <div class="d-flex gap-3 align-items-center">          
                               
                                <?php
                                    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
                                        echo "<button type='button' class='btn text-light' onclick=\"window.location.href='log_in.php'\">Login</button>";
                                        
                                        echo "<button type='button' class='btn text-light' onclick=\"window.location.href='userreg.php'\">Signup</button>";
                                        }else{
                                         echo "<button type='button' class='btn' onclick=\"window.location.href='cart.php'\"><i class='bi bi-bag'></i></button>";
                                        echo "<h5 class=' m-0 text-light'>hi! ".$_SESSION['fname']."...</h5>";
                                        echo "<button type='button' class='btn text-light' onclick=\"window.location.href='logout.php'\">Logout</button>";
                                     }
                                ?>

                            <!-- Modal -->
                            <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div id="Log-in">
                                            <div class="container">
                                                <div class="row text-center d-flex justify-content-center">
                                                    
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
                                                                            <input type="password" class="form-control" name="password" placeholder="PASSWORD"
                                                                                aria-label="First name">
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
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!--===== aside navigation slidebar ===== -->
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">TrendHive</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php">Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="products.php?category='men' ">Mens</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="products.php?category='women' ">Womens</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="products.php?category='watches' ">Watches</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="products.php?category='accessories' ">Accessories</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>