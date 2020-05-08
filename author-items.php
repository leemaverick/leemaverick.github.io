

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Wananai Online Platform">
    <meta name="keywords" content="wananai, agritech, platform, online, html5">



    <!-- inject:css -->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/lnr-icon.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/trumbowyg.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- endinject -->

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favico.png">
</head>

<body class="preload home1 mutlti-vendor">

    <!-- ================================
    START MENU AREA
    ================================= -->
    <!-- start menu-area -->
    <div class="menu-area">
        <!-- start .top-menu-area -->
        <div class="top-menu-area">
            <!-- start .container -->
            <div class="container">
                <!-- start .row -->
                <div class="row">
                    <!-- start .col-md-3 -->
                    <div class="col-lg-3 col-md-3 col-6 v_middle">
                        <div class="logo">
                            <a href="index.php">
                                <img src="images/wana1.png" alt="logo image" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <!-- end /.col-md-3 -->

                    <!-- start .col-md-5 -->
                    <div class="col-lg-8 offset-lg-1 col-md-9 col-6 v_middle">
                        <!-- start .author-area -->
                        <div class="author-area">
                            
                            <a href="signup.php" class="author-area__seller-btn inline">Signup</a>
                            <a href="login.php" class="author-area__seller-btn inline">Login</a>

                            <div class="author__notification_area">
                                <ul>
                                    <li class="has_dropdown">
                                        <div class="icon_wrap">
                                            <span class="lnr lnr-earth"></span>
                                        </div>                                       
                                    </li>                                 
                                </ul>
                            </div>;

                        </div>
                        <!-- end .author-area -->
                        <!-- author area restructured for mobile -->
                        <div class="mobile_content ">
                            <span class="lnr lnr-user menu_icon"></span>

                            <!-- offcanvas menu -->
                            <div class="offcanvas-menu closed">
                                <span class="lnr lnr-cross close_menu"></span>
                                <div class="author-author__info">
                                    
                                    <div class="autor__info v_middle">

                                        <p>Please SignUp</p>
                                        <p>...   Or Log In!</p>
                                    </div>
                                </div>
                                <!--end /.author-author__info-->

                                
                                
                                <!--start .author__notification_area -->

                                <div class="dropdowns dropdown--author">
                                    
                                </div>

                                <div class="text-center">
                                    <a href="signup.php" class="author-area__seller-btn inline">Signup</a>
                                    <a href="login.php" class="author-area__seller-btn inline">Login</a>
                                </div>
                            </div>
                        </div>
                        <!-- end /.mobile_content -->

                        <!-- author area restructured for mobile -->
                        
                        <!-- end /.mobile_content -->
                    </div>
                    <!-- end /.col-md-5 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end  -->

        <!-- start .mainmenu_area -->
        <div class="mainmenu">
            <!-- start .container -->
            <div class="container">
                <!-- start .row-->
                <div class="row">
                    <!-- start .col-md-12 -->
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <div class="mainmenu__search">
                                <form action="#">
                                    <div class="searc-wrap">
                                        <input type="text" placeholder="Search product">
                                        <button type="submit" class="search-wrap__btn">
                                            <span class="lnr lnr-magnifier"></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <nav class="navbar navbar-expand-md navbar-light mainmenu__menu">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li>
                                        <a href="index.php">HOME</a>                                       
                                    </li>
                                    <li>
                                        <a href="all-products.php" id="drop1" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products and services
                                        </a>  
                                        <div class="custom_dropdown dropdown-menu" aria-labelledby="drop1">
                                            <ul>
                                                <li>
                                                    <a href="all-products.php">Recent Items</a>
                                                </li>
                                                <li>
                                                    <a href="all-products.php">Popular Items</a>
                                                </li>
                                                
                                                <li>
                                                    <a href="all-products.php">Top Sellers</a>
                                                </li>
                                            </ul>
                                        </div>                                      
                                    </li>
                                    <li class="filter__option filter--dropdown">
                                        <a href="category-grid.php" id="drop2" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories
                                        </a>
                                        <div class="custom_dropdown dropdown-menu" aria-labelledby="drop2">
                                            <ul>
                                                <li>
                                                    <a href="category-grid.php">Vegetables</a>
                                                </li>
                                                <li>
                                                    <a href="category-grid.php">Cereals</a>
                                                </li>
                                                <li>
                                                    <a href="category-grid.php">Poultry</a>
                                                </li>
                                                <li>
                                                    <a href="category-grid.php">Herbs</a>
                                                </li>
                                                <li>
                                                    <a href="category-grid.php">Nuts</a>
                                                </li>
                                                <li>
                                                    <a href="category-grid.php">Agrochemicals</a>
                                                </li>
                                                <li>
                                                    <a href="category-grid.php">Services</a>
                                                </li>
                                                <li>
                                                    <a href="category-grid.php">Land</a>
                                                </li>
                                                <li>
                                                    <a href="category-grid.php">Transport</a>
                                                </li>
                                                 <li>
                                                    <a href="category-grid.php">Equipment</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="about.php">About</a>                                        
                                    </li>
                                    
                                    <li>
                                        <a href="contact.php">contact us</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row-->
            </div>
            <!-- start .container -->
        </div>
        <!-- end /.mainmenu-->
    </div>
    <!-- end /.menu-area -->
    <!--================================
    END MENU AREA
=================================-->

<title>Seller Items</title>
    <!--================================
        START BREADCRUMB AREA
    =================================-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li class="active">
                                <a href="#">All Items</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Seller Items</h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END BREADCRUMB AREA
    =================================-->

    <!--================================
        START AUTHOR AREA
    =================================-->
    <section class="author-profile-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <aside class="sidebar sidebar_author">
                        <div class="author-card sidebar-card">
                            <div class="author-infos">
                                <div class="author_avatar">
                                    <img src="images/user.png" alt="Presenting the broken author avatar :D">
                                </div>

                                <div class="author">
                                    <h4>Seller Name</h4>
                                    
                                </div>
                                <!-- end /.author -->

                                
                                <div class="social social--color--filled">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-facebook"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-google-plus"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-whatsapp"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end /.social -->

                                <div class="author-btn">
                                    <a href="#" class="btn btn--md btn--round">Contact Info</a>
                                </div>
                                <!-- end /.author-btn -->
                            </div>
                            <!-- end /.author-infos -->
                        </div>
                        <!-- end /.author-card -->

                        <div class="sidebar-card author-menu">
                            <ul>
                                <li>
                                    <a href="author.php">Profile</a>
                                </li>
                                <li>
                                    <a class="active" href="author-items.php">Seller Items</a>
                                </li>
                                <li>
                                    <a href="author-reviews.php">Customer Reviews</a>
                                </li>
                                
                            </ul>
                        </div>
                        <!-- end /.author-menu -->

                        <div class="sidebar-card freelance-status">
                            <div class="custom-radio">
                                <input type="radio" id="opt1" class="" name="filter_opt" checked>
                                <label for="opt1">
                                    <span class="circle"></span>Available for Freelance Work</label>
                            </div>
                        </div>
                        <!-- end /.author-card -->

                        <div class="sidebar-card message-card">
                            <div class="card-title">
                                <h4>Product Information</h4>
                            </div>

                            <div class="message-form">
                                <form action="#">
                                    <div class="form-group">
                                        <textarea name="message" class="text_field" id="author-message" placeholder="Your message..."></textarea>
                                    </div>

                                    <div class="msg_submit">
                                        <button type="submit" class="btn btn--md btn--round">send message</button>
                                    </div>
                                </form>
                                <p> Please
                                    <a href="login.php">sign in</a> to contact this seller.</p>
                            </div>
                            <!-- end /.message-form -->
                        </div>
                        <!-- end /.freelance-status -->
                    </aside>
                </div>
                <!-- end /.sidebar -->

                <div class="col-lg-8">

                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="author-info mcolorbg4">
                                <p>Total Items</p>
                                <h3>0</h3>
                            </div>
                        </div>
                        <!-- end /.col-md-4 -->

                        <div class="col-md-4 col-sm-4">
                            <div class="author-info pcolorbg">
                                <p>Total Customers</p>
                                <h3>0</h3>
                            </div>
                        </div>
                        <!-- end /.col-md-4 -->

                        <div class="col-md-4 col-sm-4">
                            <div class="author-info scolorbg">
                                <p>Ratings</p>
                                <div class="rating">
                                    <ul>
                                        <li>
                                            <span class="fa fa-star-o"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-o"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-o"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-o"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-o"></span>
                                        </li>
                                    </ul>
                                    <span class="rating__count">(0)</span>
                                </div>
                            </div>
                        </div>
                        <!-- end /.col-md-4 -->
                    </div>
                    <!-- end /.row -->


                    <div class="row">
                        <div class="col-md-12">
                            <div class="filter-bar clearfix filter-bar2">
                                <div class="filter__option filter--text pull-left">
                                    <p>
                                        <span></span>Seller Items</p>
                                </div>

                                <div class="pull-right">
                                    <div class="filter__option filter--dropdown">
                                        <a href="#" class="dropdown-trigger dropdown-toggle" id="drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories
                                            <span class="lnr lnr-chevron-down"></span>
                                        </a>
                                        <ul class="custom_dropdown custom_drop2 dropdown-menu" aria-labelledby="drop1">
                                            <li>
                                                <a href="category-grid.php">Vegetables
                                                    <span>0</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="category-grid.php">Cereals
                                                    <span>0</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="category-grid.php">Poultry
                                                    <span>0</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="category-grid.php">Livestock
                                                    <span>0</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="category-grid.php">Herbs
                                                    <span>0</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="category-grid.php">Nuts
                                                    <span>0</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="category-grid.php">Agrochemicals
                                                    <span>0</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="category-grid.php">Services
                                                    <span>0</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="category-grid.php">Land
                                                    <span>0</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="category-grid.php">Transport
                                                    <span>0</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="category-grid.php">Equipment
                                                    <span>0</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="filter__option filter--dropdown">
                                        <a href="#" id="drop2" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter By
                                            <span class="lnr lnr-chevron-down"></span>
                                        </a>
                                        <ul class="custom_dropdown dropdown-menu" aria-labelledby="drop2">
                                            <li>
                                                <a href="category-grid.php">Recent Items</a>
                                            </li>
                                            <li>
                                                <a href="category-grid.php">Popular Items </a>
                                            </li>
                                            <li>
                                                <a href="category-grid.php">Top Seller </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end /.pull-right -->
                            </div>
                            <!-- end filter-bar -->
                        </div>
                        <!-- end /.col-md-12 -->

                        <!-- start .col-md-6 -->
                        <div class="col-lg-6 col-md-6">
                            <!-- start .single-product -->
                            <div class="product product--card">

                                <div class="product__thumbnail">
                                    <img src="images/placeholder1s.jpg" alt="Product Image">
                                    <div class="prod_btn">
                                        <a href="single-product.php" class="transparent btn--sm btn--round">View Item</a>
                                        
                                    </div>
                                    <!-- end /.prod_btn -->
                                </div>
                                <!-- end /.product__thumbnail -->

                                <div class="product-desc">
                                    <a href="single-product.php" class="product_title">
                                        <h4>Product/Service Title</h4>
                                    </a>
                                    <ul class="titlebtm">
                                        <li>
                                            <img class="auth-img" src="images/avatar.png" alt="author image">
                                            <p>
                                                <a href="author.php">Seller Name</a>
                                            </p>
                                        
                                    </ul>

                                    <p>An online society designed to connect agri-businesses creating an information sharing and marketing platform sorely dedicated to improving productivity.</p>
                                </div>
                                <!-- end /.product-desc -->

                                <div class="product-purchase">
                                    <div class="price_love">
                                        <span>$amount</span>
                                        
                                    </div>

                                    
                                </div>
                                <!-- end /.product-purchase -->
                            </div>
                            <!-- end /.single-product -->
                        </div>
                        <!-- end /.col-md-6 -->

                        <!-- start .col-md-6 -->
                        <div class="col-lg-6 col-md-6">
                            <!-- start .single-product -->
                            <div class="product product--card">

                                <div class="product__thumbnail">
                                    <img src="images/placeholder1s.jpg" alt="Product Image">
                                    <div class="prod_btn">
                                        <a href="single-product.php" class="transparent btn--sm btn--round">View Item</a>
                                        
                                    </div>
                                    <!-- end /.prod_btn -->
                                </div>
                                <!-- end /.product__thumbnail -->

                                <div class="product-desc">
                                    <a href="single-product.php" class="product_title">
                                        <h4>Product/Service Title</h4>
                                    </a>
                                    <ul class="titlebtm">
                                        <li>
                                            <img class="auth-img" src="images/avatar.png" alt="author image">
                                            <p>
                                                <a href="author.php">Seller Name</a>
                                            </p>
                                        
                                    </ul>

                                    <p>An online society designed to connect agri-businesses creating an information sharing and marketing platform sorely dedicated to improving productivity.</p>
                                </div>
                                <!-- end /.product-desc -->

                                <div class="product-purchase">
                                    <div class="price_love">
                                        <span>$amount</span>
                                        
                                    </div>

                                </div>
                                <!-- end /.product-purchase -->
                            </div>
                            <!-- end /.single-product -->
                        </div>
                        <!-- end /.col-md-6 -->

                        <!-- end /.col-md-6 -->
                    </div>
                    <!-- end /.row -->

                    <div class="pagination-area pagination--right">
                        <nav class="navigation pagination" role="navigation">
                            <div class="nav-links">
                                <a class="prev page-numbers" href="#">
                                    <span class="lnr lnr-arrow-left"></span>
                                </a>
                                <a class="page-numbers current" href="#/">1</a>
                                <a class="page-numbers" href="#">2</a>
                                <a class="page-numbers" href="#">3</a>
                                <a class="next page-numbers" href="#">
                                    <span class="lnr lnr-arrow-right"></span>
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- end /.col-md-8 -->

            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END AUTHOR AREA
    =================================-->


    <!--================================
        START CALL TO ACTION AREA
    =================================-->
    <section class="call-to-action bgimage">
        <div class="bg_image_holder">
            <img src="images/img3.jpg" alt="">
        </div>
        <div class="container content_above">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-wrap">
                        <h1 class="text--white">Ready to Join Our Community!</h1>
                        <h4 class="text--white">Over 2,000 farmers and agribusinesses on wananai.com</h4>
                        <a href="signup.html" class="btn btn--lg btn--round btn--white callto-action-btn">Join Us Today</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================
        END CALL TO ACTION AREA
    =================================-->

 <!--================================
    START FOOTER AREA
=================================-->
    <footer class="footer-area footer--light">
        <div class="footer-big section--padding">
            <!-- start .container -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-menu footer-menu--1">
                            <h4 class="footer-widget-title">Popular Categories</h4>
                            <ul>
                                <li>
                                    <a href="category-grid.php">Vegetables</a>
                                </li>
                                <li>
                                    <a href="category-grid.php">Cereals</a>
                                </li>
                                <li>
                                    <a href="category-grid.php">Livestock</a>
                                </li>
                                
                            </ul>
                        </div>
                        <!-- end /.footer-menu -->
                    </div>
                    <!-- end /.col-md-3 -->

                    <div class="col-lg-5 col-md-6">
                        <div class="footer-menu">
                            <h4 class="footer-widget-title">Our Company</h4>
                            <ul>
                                <li>
                                    <a href="about.php">About Us</a>
                                </li>
                                <li>
                                    <a href="about.php">Our People</a>
                                </li>
                        
                                <li>
                                    <a href="contact.php">Contact Us</a>
                                </li>
                                
                            </ul>
                        </div>
                        <!-- end /.footer-menu -->

                        <div class="footer-menu">
                            <h4 class="footer-widget-title">Help & FAQ's</h4>
                            <ul>
                                <li>
                                    <a href="how-it-works.php">How It Works</a>
                                </li>
                                <li>
                                    <a href="#">Terms & Conditions</a>
                                </li>
                                
                                <li>
                                    <a href="#">FAQs</a>
                                </li>
                                
                            </ul>
                        </div>
                        <!-- end /.footer-menu -->
                    </div>
                    <!-- end /.col-md-5 -->

                    <div class="col-lg-4 col-md-12">
                        <div class="newsletter">
                            <h4 class="footer-widget-title">wananai.com</h4>
                             <p class="info--text">Increasing Productivity Through Connectivity.</p>
                            

                            <!-- start .social -->
                            <div class="social social--color--filled">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-whatsapp"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-linkedin"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.social -->
                        </div>
                        <!-- end /.newsletter -->
                    </div>
                    <!-- end /.col-md-4 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.footer-big -->

        <div class="mini-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright-text">
                            <p>&copy; 2020
                                <a href="#">Wananai Agritech</a>. All rights reserved. Developed by
                                <a href="#">L.Paratambwa</a>
                            </p>
                        </div>

                        <div class="go_top">
                            <span class="lnr lnr-chevron-up"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<!--==============================
    END FOOTER AREA
=================================-->

    <!--//////////////////// JS GOES HERE ////////////////-->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0C5etf1GVmL_ldVAichWwFFVcDfa1y_c"></script>
    <!-- inject:js -->
    <script src="js/vendor/jquery/jquery-1.12.3.js"></script>
    <script src="js/vendor/jquery/popper.min.js"></script>
    <script src="js/vendor/jquery/uikit.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/vendor/chart.bundle.min.js"></script>
    <script src="js/vendor/grid.min.js"></script>
    <script src="js/vendor/jquery-ui.min.js"></script>
    <script src="js/vendor/jquery.barrating.min.js"></script>
    <script src="js/vendor/jquery.countdown.min.js"></script>
    <script src="js/vendor/jquery.counterup.min.js"></script>
    <script src="js/vendor/jquery.easing1.3.js"></script>
    <script src="js/vendor/owl.carousel.min.js"></script>
    <script src="js/vendor/slick.min.js"></script>
    <script src="js/vendor/tether.min.js"></script>
    <script src="js/vendor/trumbowyg.min.js"></script>
    <script src="js/vendor/waypoints.min.js"></script>
    <script src="js/dashboard.js"></script>
    <script src="js/main.js"></script>
    <script src="js/map.js"></script>
    <!-- endinject -->
</body>

</html>