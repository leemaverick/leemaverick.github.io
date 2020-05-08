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

    <!--================================
    START ABOUT HERO AREA
=================================-->
    <section class="about_hero bgimage">
        <div class="bg_image_holder">
            <img src="images/img5.jpg" alt="">
        </div>

        <div class="container content_above">
            <div class="row">
                <div class="col-md-12">
                    <div class="about_hero_contents">
                        <h1>Welcome to Wananai!</h1>
                        <p>Increasing Productivity  
                            <span>Through Connectivity</span>
                        </p>

                        <div class="about_hero_btns">
                            
                            <a href="signup.php" class="btn btn--white btn--lg btn--round">Join Us Today</a>
                        </div>
                    </div>
                    <!-- end /.about_hero_contents -->
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row-->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
    END ABOUT HERO AREA
=================================-->

    <!--================================
    END ABOUT HERO AREA
=================================-->
    <section class="about_mission">
        <div class="content_block1">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-12">
                        <div class="content_area">
                            <h1 class="content_area--title">About
                                <span class="highlight">Wananai</span>
                            </h1>
                            <p>Wananai Agritech is a business wholly devoted to the attainment of African food security by improving access to information for agribusinesses. The team is devoted to ensuring that information on weather, technology and markets is easily related to agribusinesses in real time. The goal is to ensure that farmers are better equipped to make smart well informed decisions when making business decisions about their agribusinesses. This improves yield and improved market capitalization hence improved profits and improved general output from farms</p>
                        </div>
                    </div>
                    <!-- end /.col-md-5 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->

            <div class="content_image bgimage">
                <div class="bg_image_holder">
                    <img src="images/placeholder.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- end /.about -->

        
        <!-- end /.mission-->
    </section>
    <!--================================
    END ABOUT HERO AREA
=================================-->

    <!--================================
    START TIMELINE AREA
=================================-->
    <!--================================
    END TIMELINE AREA
=================================-->


    <!--================================
    START COUNTER UP AREA2
=================================-->
    
    <!--================================
    END COUNTER UP AREA2
=================================-->

    <!--================================
    START MARTPLACE TEAM AREA
=================================-->
    <section class="team_area section--padding">
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>Meet Our Team
                            <span class="highlighted">Wananai</span>
                        </h1>
                        <p>A perfect blend of creativity and technical wizardry. The best people formula to help you increase your productivity.</p>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="">
                        <div class="single_speaker">
                            <div class="speaker__thumbnail">
                                <img src="images/member.png" alt="">
                            </div>

                            <div class="speaker__detail">
                                <h4>Leon Nyamweda</h4>
                                <span class="ocuup">Co-Founder</span>
                                <p>Kudzai assumes the role of Executive Director
                                </p>

                                <div class="speaker_social">
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
                            </div>
                        </div>
                        <!-- end single_speaker-->

                        <div class="single_speaker">
                            <div class="speaker__thumbnail">
                                <img src="images/member.png" alt="">
                            </div>

                            <div class="speaker__detail">
                                <h4>Leeroy Paratambwa</h4>
                                <span class="ocuup">Co-Founder</span>
                                <p>Kudzai assumes the role of Executive Director
                                </p>

                                <div class="speaker_social">
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
                            </div>
                        </div>
                        <!-- end single_speaker-->
                        <div class="single_speaker">
                            <div class="speaker__thumbnail">
                                <img src="images/member.png" alt="">
                            </div>

                            <div class="speaker__detail">
                                <h4>Kudzai Mafuta</h4>
                                <span class="ocuup">Co-Founder</span>
                                <p>Kudzai assumes the role of Executive Director
                                </p>

                                <div class="speaker_social">
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
                            </div>
                        </div>
                        

                        
                        <!-- end single_speaker-->
                    </div>
                    <!-- end /.event_module -->
                </div>
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
    END MARTPLACE TEAM AREA
=================================-->

    <!--================================
    START PARTNER AREA
=================================-->
    
    <!--================================
    END PARTNER AREA
=================================-->


    <!--================================
    START IMAGE GALLERY
=================================-->
    <!--================================
    END IMAGE GALLERY
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
<!--================================
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