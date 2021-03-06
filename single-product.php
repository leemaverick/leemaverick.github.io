

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

<title>Product/Service</title>
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
                            <li>
                                <a href="all-products.php">Products & Services</a>
                            </li>
                            <li class="active">
                                <a href="category-grid.php">Category</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Product/Service Title</h1>
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


    <!--============================================
        START SINGLE PRODUCT DESCRIPTION AREA
    ==============================================-->
    <section class="single-product-desc single-product-desc2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="item-preview item-preview2">
                        <div class="prev-slide">
                            <img src="images/placeholder1s.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing.">
                        </div>

                        <div class="item__preview-thumb">
                            <div class="item-action">
                                <div class="action-btns">
                                    <a href="#" class="btn btn--round btn--lg">Contact Seller</a>
                                    
                                </div>
                            </div>
                            <!-- end /.item__action -->
                        </div>
                        <!-- end /.item__preview-thumb-->

                        <div class="tab tab2">
                            <div class="item-navigation">
                                <ul class="nav nav-tabs nav--tabs2">
                                    <li>
                                        <a href="#product-details" class="active" aria-controls="product-details" role="tab" data-toggle="tab">Item Details</a>
                                    </li>
                                    <li>
                                        <a href="#product-comment" aria-controls="product-comment" role="tab" data-toggle="tab">Comments </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.item-navigation -->

                            <div class="tab-content">
                                <div class="tab-pane product-tab fade show active" id="product-details">
                                    <h1>Product/Service</h1>
                                    <p>An online society designed to connect agri-businesses creating an information sharing and marketing platform sorely dedicated to improving productivity.</p>

                                    <div class="item_social_share">
                                        <p>
                                            <img src="images/svg/share.svg" alt="This is share svg">
                                            <span>Share this item</span>
                                        </p>

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
                                        <!-- end /.social-->

                                    </div>
                                </div>
                                <!-- end /.tab-content -->

                                <div class="tab-pane product-tab fade" id="product-comment">
                                    <div class="thread">
                                        <ul class="media-list thread-list">
                                            <!-- end single comment thread /.comment-->

                                            <!-- end single comment thread /.comment-->

                                            <!-- end single comment thread /.comment-->

                                            <!-- end single comment thread /.comment-->
                                        </ul>
                                        <!-- end /.media-list -->

                                        <!-- end /.comment pagination area -->

                                        <div class="comment-form-area">
                                            <h4>Leave a comment</h4>
                                            <!-- comment reply -->
                                            <div class="media comment-form">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="images/avatar.png" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <form action="#" class="comment-reply-form">
                                                        <textarea name="reply-comment" placeholder="Write your comment..."></textarea>
                                                        <button class="btn btn--sm btn--round">Post Comment</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- comment reply -->
                                        </div>
                                        <!-- end /.comment-form-area -->
                                    </div>
                                    <!-- end /.comments -->
                                </div>
                                <!-- end /.product-comment -->
                            </div>
                            <!-- end /.tab-content -->
                        </div>
                        <!-- end /.item-info -->
                    </div>
                    <!-- end /.item-preview-->
                </div>
                <!-- end /.col-md-8 -->

                <div class="col-lg-4">
                    <aside class="sidebar sidebar--single-product">
                        <div class="sidebar-card card-pricing">
                            <div class="price">
                                <h1>
                                    <sup>$</sup>
                                    <span>amount</span>
                                </h1>
                            </div>
                            <div class="purchase-button">
                                <a href="#" class="btn btn--lg btn--round">Contact Seller</a>
                            </div>
                            <!-- end /.purchase-button -->
                        </div>
                        <!-- end /.sidebar--card -->

                       

                        <div class="sidebar-card card--product-infos">
                            <div class="card-title">
                                <h4>Product Information</h4>
                            </div>

                            <ul class="infos">
                                <li>
                                    <p class="data-label">Posted</p>
                                    <p class="info">xx/xx/xxxx</p>
                                </li>
                                <li>
                                    <p class="data-label">Updated</p>
                                    <p class="info">xx/xx/xxxx</p>
                                </li>
                                <li>
                                    <p class="data-label">Location</p>
                                    <p class="info">???</p>
                                </li>
                                <li>
                                    <p class="data-label">Delivery</p>
                                    <p class="info">???</p>
                                </li>
                                <li>
                                    <p class="data-label">Quantity</p>
                                    <p class="info">???</p>
                                </li>
                                <li>
                                    <p class="data-label">Description</p>
                                    <p class="info">???</p>
                                </li>
                                <li>
                                    <p class="data-label">Tags</p>
                                    <p class="info">
                                        <a href="#">???</a>,
                                        <a href="#">???</a>,
                                        <a href="#">???</a>,
                                        
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.aside -->
                    </aside>
                    <!-- end /.aside -->
                </div>
                <!-- end /.col-md-4 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--===========================================
        END SINGLE PRODUCT DESCRIPTION AREA
    ===============================================-->

    
    <!--============================================
        START MORE PRODUCT ARE
    ==============================================-->
    <!--============================================
        END MORE PRODUCT AREA
    ==============================================-->


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
                        <a href="signup.php" class="btn btn--lg btn--round btn--white callto-action-btn">Join Us Today</a>
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