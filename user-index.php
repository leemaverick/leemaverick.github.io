
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Wananai Online Platform">
    <meta name="keywords" content="marketplace, easy digital download, digital product, digital, html5">


    <title>Wananai</title>

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
                            <a href="index.html">
                                <img src="images/wana1.png" alt="logo image" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <!-- end /.col-md-3 -->

                    <!-- start .col-md-5 -->
                    <div class="col-lg-8 offset-lg-1 col-md-9 col-6 v_middle">
                        <!-- start .author-area -->
                        <div class="author-area">
                            
                            <a href="signup.html" class="author-area__seller-btn inline">Become A Seller</a>
                            <a href="seller-login.html" class="author-area__seller-btn inline">LogIn As Seller</a>
                            
                            <div class="author__notification_area">
                                <ul>
                                    <li class="has_dropdown">
                                        <div class="icon_wrap">
                                            <span class="lnr lnr-alarm"></span>
                                            
                                        </div>
                                    </li>

                                    <li class="has_dropdown">
                                        <div class="icon_wrap">
                                            <span class="lnr lnr-envelope"></span>
                                        </div>
                                    </li>
                                    <li class="has_dropdown">
                                        <div class="icon_wrap">
                                            <span class="lnr lnr-earth"></span>
                                            
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <?php 
                            if(isset($_SESSION['customer']))
                            {
                                
                            ?>
                            <div class="author-author__info inline has_dropdown">
                                <div class="author__avatar">
                                    <img src="images/avatar.png" alt="user avatar">

                                </div>
                                <div class="autor__info">
                                    <p class="name">
                                        Test
                                    </p>
                                    
                                </div>

                                <div class="dropdowns dropdown--author">
                                    <ul>
                                        <li>
                                            <a href="user-author.html">
                                                <span class="lnr lnr-user"></span>Profile</a>
                                        </li>
                                        <li>
                                            <a href="user-topics.html">
                                                <span class="lnr lnr-upload"></span>Topics</a>
                                        </li>
                                        <li>
                                            <a href="user-how-it-works.html">
                                                <span class="lnr lnr-book"></span>Help Center</a>
                                        </li>
                                        <li>
                                            <a href="user-logout.html">
                                                <span class="lnr lnr-exit"></span>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            

                        </div>
                        <!-- end .author-area -->
                        <!-- author area restructured for mobile -->
                        <div class="mobile_content ">
                            <span class="lnr lnr-user menu_icon"></span>

                            <!-- offcanvas menu -->
                            <div class="offcanvas-menu closed">
                                <span class="lnr lnr-cross close_menu"></span>
                                <div class="author-author__info">
                                    <div class="author__avatar v_middle">
                                        <img src="images/avatar.png" alt="user avatar">
                                    </div>
                                    <div class="autor__info v_middle">
                                        <p class="name">
                                            Test
                                        </p>
                                       
                                    </div>
                                </div>
                                <!--end /.author-author__info-->

                                <div class="author__notification_area">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <div class="icon_wrap">
                                                    <span class="lnr lnr-alarm"></span>
                                                    
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <div class="icon_wrap">
                                                    <span class="lnr lnr-envelope"></span>
                                                    
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <div class="icon_wrap">
                                                    <span class="lnr lnr-earth"></span>
                                                    
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!--start .author__notification_area -->

                                <div class="dropdowns dropdown--author">
                                    <ul>
                                        <li>
                                            <a href="user-author.html">
                                                <span class="lnr lnr-user"></span>Profile</a>
                                        </li>
                                       
                                        <li>
                                            <a href="user-topics.html">
                                                <span class="lnr lnr-cog"></span>Topics</a>
                                        </li>
                                        
                                        <li>
                                            <a href="seller-login.html">
                                                <span class="lnr lnr-enter"></span>LogIn As Seller</a>
                                        </li>
                                        <li>
                                            <a href="user-how-it-works.html">
                                                <span class="lnr lnr-book"></span>Help Center</a>
                                        </li>
                                        <li>
                                            <a href="user-logout.html">
                                                <span class="lnr lnr-exit"></span>Logout</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="text-center">
                                <a href="signup.html" class="author-area__seller-btn inline">Become A Seller</a>
                                </div>


                            </div>
                        </div><!-- end /.mobile_content -->
                        <?php
                        }

                        ?>

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
                                        <a href="index.html">HOME</a>                                       
                                    </li>
                                    <li>
                                        <a href="all-products.html" id="drop1" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products and services
                                        </a>  
                                        <div class="custom_dropdown dropdown-menu" aria-labelledby="drop1">
                                            <ul>
                                                <li>
                                                    <a href="all-products.html">Recent Items</a>
                                                </li>
                                                <li>
                                                    <a href="all-products.html">Popular Items</a>
                                                </li>
                                                
                                                <li>
                                                    <a href="all-products.html">Top Sellers</a>
                                                </li>
                                            </ul>
                                        </div>                                      
                                    </li>
                                    <li class="filter__option filter--dropdown">
                                        <a href="category-grid.html" id="drop2" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories
                                        </a>
                                        <div class="custom_dropdown dropdown-menu" aria-labelledby="drop2">
                                            <ul>
                                                <li>
                                                    <a href="category-grid.html">Vegetables</a>
                                                </li>
                                                <li>
                                                    <a href="category-grid.html">Cereals</a>
                                                </li>
                                                <li>
                                                    <a href="category-grid.html">Poultry</a>
                                                </li>
                                                <li>
                                                    <a href="category-grid.html">Herbs</a>
                                                </li>
                                                <li>
                                                    <a href="category-grid.html">Nuts</a>
                                                </li>
                                                <li>
                                                    <a href="category-grid.html">Agrochemicals</a>
                                                </li>
                                                <li>
                                                    <a href="category-grid.html">Services</a>
                                                </li>
                                                <li>
                                                    <a href="category-grid.html">Land</a>
                                                </li>
                                                <li>
                                                    <a href="category-grid.html">Transport</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="about.html">About</a>                                        
                                    </li>
                                    
                                    <li>
                                        <a href="contact.html">contact us</a>
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

<title>Wananai - Home</title>
    <!--==============================
    START HERO AREA
=================================-->
    <section class="hero-area bgimage">
        <div class="bg_image_holder">
            <img src="images/hero4.jpg" alt="background-image">
        </div>
        <!-- start hero-content -->
        <div class="hero-content content_above">
            <!-- start .contact_wrapper -->
            <div class="content-wrapper">
                <!-- start .container -->
                <div class="container">
                    <!-- start row -->
                    <div class="row">
                        <!-- start col-md-12 -->
                        <div class="col-md-12">
                            <div class="hero__content__title">
                                <h1>
                                    <span class="light">wananai.com</span>
                                    <span class="bold">Increasing Productivity Through Connectivity</span>
                                </h1>
                                <p class="tagline">An online society designed to connect agri-businesses & dedicated to improving productivity.</p>
                            </div>

                            <!-- start .hero__btn-area-->
                            <div class="hero__btn-area">
                                <a href="user-all-products.html" class="btn btn--round btn--lg">Products & Services</a>
                                <a href="user-all-products.html" class="btn btn--round btn--lg">Popular Items</a>
                            </div>
                            <!-- end .hero__btn-area-->
                        </div>
                        <!-- end /.col-md-12 -->
                    </div>
                    <!-- end /.row -->
                </div>
                <!-- end /.container -->
            </div>
            <!-- end .contact_wrapper -->
        </div>
        <!-- end hero-content -->

        <!--start search-area -->
        <div class="search-area">
            <!-- start .container -->
            <div class="container">
                <!-- start .container -->
                <div class="row">
                    <!-- start .col-sm-12 -->
                    <div class="col-sm-12">
                        <!-- start .search_box -->
                        <div class="search_box">
                            <form action="#">
                                <input type="text" class="text_field" placeholder="Search your products...">
                                <div class="search__select select-wrap">
                                    <select name="Location" class="select--field" id="blah">
                                        <option value="">Location</option>
                                        <option value="">Bulawayo</option>
                                        <option value="">Midlands</option>
                                        <option value="">Mashonaland</option>
                                        <option value="">Masvingo</option>
                                    </select>
                                    <span class="lnr lnr-chevron-down"></span>
                                </div>
                                <button type="submit" class="search-btn btn--lg">Search Now</button>
                            </form>
                        </div>
                        <!-- end ./search_box -->
                    </div>
                    <!-- end /.col-sm-12 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!--start /.search-area -->
    </section>
    <!--================================
    END HERO AREA
=================================-->

    <!--================================
    START FEATURE AREA
=================================-->
    <!--================================
    END FEATURE AREA
=================================-->


    <!--================================
    START FEATURED PRODUCT AREA
=================================-->
    <section class="featured-products bgcolor  section--padding">
        <!-- start /.container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="product-title-area ">
                        <div class="product__title">
                            <h2>Featured Products and Services</h2>
                        </div>

                        <div class="product__slider-nav rounded">
                            <span class="lnr lnr-chevron-left nav_left"></span>
                            <span class="lnr lnr-chevron-right nav_right"></span>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>

        <!-- start .featured-product-slider -->



        <div class="container">
            <div class="row">
                <div class="col-md-12 no0-padding">
                    <div class="featured-product-slider prod-slider1">
                        <div class="featured__single-slider">
                            <div class="featured__preview-img">
                                <img src="images/chibage.jpg" alt="Featured products">
                                <div class="prod_btn">
                                    
                                    <a href="user-single-product.html" class="transparent btn--sm btn--round">View Item</a>
                                </div>
                            </div>
                            <!-- end /.featured__preview-img -->

                            <div class="featured__product-description">
                                <div class="product-desc desc--featured">
                                    <a href="user-single-product.html" class="product_title">
                                        <h4>32Tonnes Dzechibage</h4>
                                    </a>
                                    <ul class="titlebtm">
                                        <li>
                                            <img class="auth-img" src="images/avatar.png" alt="author image">
                                            <p>
                                                <a href="user-author.html">Bento</a>
                                            </p>
                                        </li>
                                        <li class="product_cat">
                                            <a href="#">
                                                <span class="lnr lnr-map-marker"></span> Rusape</a>
                                        </li>
                                    </ul>
                                    <!-- end /.titlebtm -->

                                    <p>Need to provide farmers quick and cheap access to suppliers of different inputs
                                     and services for the production of agric produce Need to provide farmers direct 
                                      access to the market and vice versa to help market agric produce</p>
                                </div>
                                <!-- end /.product-desc -->

                                <div class="product_data">
                                    <div class="tags tags--round">
                                        <ul>
                                            <li>
                                                <a href="user-category-grid.html">cereals</a>
                                            </li>
                                            <li>
                                                <a href="user-category-grid.html">maize</a>
                                            </li>
                                            <li>
                                                <a href="user-category-grid.html">chibage</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end /.tags -->
                                    <div class="product-purchase featured--product-purchase">
                                        <div class="price_love">
                                            <span>$ZWL 34 000</span>
                                            
                                        </div>
                                        <div class="sell">
                                            
                                        </div>

                                        
                                    </div>
                                    <!-- end /.product-purchase -->
                                </div>
                            </div>
                            <!-- end /.featured__product-description -->
                        </div>
                        <!--end /.featured__single-slider-->

                        <div class="featured__single-slider">
                            <div class="featured__preview-img">
                                <img src="images/tsunga.jpg" alt="Featured products">
                                <div class="prod_btn">
                                    <a href="user-single-product.html" class="transparent btn--sm btn--round">View Item</a>
                                    
                                </div>
                            </div>
                            <!-- end /.featured__preview-img -->

                            <div class="featured__product-description">
                                <div class="product-desc desc--featured">
                                    <a href="user-single-product.html" class="product_title">
                                        <h4>29 Bundles of Tsunga</h4>
                                    </a>
                                    <ul class="titlebtm">
                                        <li>
                                            <img class="auth-img" src="images/auth.jpg" alt="author image">
                                            <p>
                                                <a href="user-author.html">Sly</a>
                                            </p>
                                        </li>
                                        <li class="product_cat">
                                            <a href="#">
                                                <span class="lnr lnr-map-marker"></span> Binga</a>
                                        </li>
                                    </ul>
                                    <!-- end /.titlebtm -->

                                    <p>Need to provide farmers quick and cheap access to suppliers of different inputs
                                     and services for the production of agric produce Need to provide farmers direct 
                                      access to the market and vice versa to help market agric produce.</p>
                                </div>
                                <!-- end /.product-desc -->

                                <div class="product_data">
                                    <div class="tags tags--round">
                                        <ul>
                                            <li>
                                                <a href="user-category-grid.html">horticulture</a>
                                            </li>
                                            <li>
                                                <a href="user-category-grid.html">tsunga</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <!-- end /.tags -->
                                    <div class="product-purchase featured--product-purchase">
                                        <div class="price_love">
                                            <span>$ZWL10 per bundle</span>
                                            </div>
                                        <div class="sell">
                                            
                                        </div>

                                        
                                    </div>
                                    <!-- end /.product-purchase -->
                                </div>
                            </div>
                            <!-- end /.featured__product-description -->
                        </div>
                        <!--end /.featured__single-slider-->

                        <div class="featured__single-slider">
                            <div class="featured__preview-img">
                                <img src="images/mombe.jpg" alt="Featured products">
                                <div class="prod_btn">
                                    <a href="user-single-product.html" class="transparent btn--sm btn--round">View Item</a>
                                    
                                </div>
                            </div>
                            <!-- end /.featured__preview-img -->

                            <div class="featured__product-description">
                                <div class="product-desc desc--featured">
                                    <a href="user-single-product.html" class="product_title">
                                        <h4>62 Jersery Cows</h4>
                                    </a>
                                    <ul class="titlebtm">
                                        <li>
                                            <img class="auth-img" src="images/auth.jpg" alt="author image">
                                            <p>
                                                <a href="user-author.html">Leon</a>
                                            </p>
                                        </li>
                                        <li class="product_cat">
                                            <a href="#">
                                                <span class="lnr lnr-map-marker"></span> Mazowe</a>
                                        </li>
                                    </ul>
                                    <!-- end /.titlebtm -->

                                    <p>Need to provide farmers quick and cheap access to suppliers of different inputs
                                     and services for the production of agric produce Need to provide farmers direct 
                                      access to the market and vice versa to help market agric produce</p>
                                </div>
                                <!-- end /.product-desc -->

                                <div class="product_data">
                                    <div class="tags tags--round">
                                        <ul>
                                            <li>
                                                <a href="user-category-grid.html">livestock</a>
                                            </li>
                                            <li>
                                                <a href="user-category-grid.html">cows</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <!-- end /.tags -->
                                    <div class="product-purchase featured--product-purchase">
                                        <div class="price_love">
                                            <span>$ZWL 2 000 per beast</span>
                                            </div>
                                        <div class="sell">
                                            
                                        </div>

                                    </div>
                                    <!-- end /.product-purchase -->
                                </div>
                            </div>
                            <!-- end /.featured__product-description -->
                        </div>
                        <!--end /.featured__single-slider-->

                        <div class="featured__single-slider">
                            <div class="featured__preview-img">
                                <img src="images/broiler.jpg" alt="Featured products">
                                <div class="prod_btn">
                                    <a href="user-single-product.html" class="transparent btn--sm btn--round">View Item</a>
                                    
                                </div>
                            </div>
                            <!-- end /.featured__preview-img -->

                            <div class="featured__product-description">
                                <div class="product-desc desc--featured">
                                    <a href="user-single-product.html" class="product_title">
                                        <h4>300 Broilers</h4>
                                    </a>
                                    <ul class="titlebtm">
                                        <li>
                                            <img class="auth-img" src="images/auth.jpg" alt="author image">
                                            <p>
                                                <a href="user-author.html">Leeroy</a>
                                            </p>
                                        </li>
                                        <li class="product_cat">
                                            <a href="#">
                                                <span class="lnr lnr-map-marker"></span> Chinhoyi</a>
                                        </li>
                                    </ul>
                                    <!-- end /.titlebtm -->

                                    <p>Need to provide farmers quick and cheap access to suppliers of different inputs
                                     and services for the production of agric produce Need to provide farmers direct 
                                      access to the market and vice versa to help market agric produce.</p>
                                </div>
                                <!-- end /.product-desc -->

                                <div class="product_data">
                                    <div class="tags tags--round">
                                        <ul>
                                            <li>
                                                <a href="user-category-grid.html">poultry</a>
                                            </li>
                                            <li>
                                                <a href="user-category-grid.html">broilers</a>
                                            </li>
                                            <li>
                                                <a href="user-category-grid.html">huku</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end /.tags -->
                                    <div class="product-purchase featured--product-purchase">
                                        <div class="price_love">
                                            <span>$ZWL 70 per bird</span>
                                            
                                        </div>
                                        <div class="sell">
                                            
                                        </div>

                                        
                                    </div>
                                    <!-- end /.product-purchase -->
                                </div>
                            </div>
                            <!-- end /.featured__product-description -->
                        </div>
                        <!--end /.featured__single-slider-->
                    </div>
                </div>
            </div>
            <!-- end /.featured__preview-img -->
        </div>
        <!-- end /.featured-product-slider -->
    </section>
    <!--================================
    END FEATURED PRODUCT AREA
=================================-->


    <!--================================
    START PRODUCTS AREA
=================================-->
    <!--================================
    END PRODUCTS AREA
=================================-->


    <!--================================
    START FOLLOWERS FEED AREA
=================================-->
    <!--================================
    END FOLLOWERS FEED AREA
=================================-->

    <!--================================
    START COUNTER UP AREA
=================================-->
    <!--================================
    END COUNTER UP AREA
=================================-->


    <!--================================
    END COUNTER UP AREA
=================================-->

    <!--================================
    START SELL BUY
=================================-->
    <section class="proposal-area">

        <!-- start container-fluid -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 no-padding">
                    <div class="proposal proposal--left bgimage">
                        <div class="bg_image_holder">
                            <img src="images/bbg.png" alt="prop image">
                        </div>
                        <div class="content_above">
                            <div class="proposal__icon ">
                                <img src="images/buy.png" alt="Buy icon">
                            </div>
                            <div class="proposal__content ">
                                <h1 class="text--white">Advertise Your Products Or Services</h1>
                                
                            </div>
                            <a href="seller-signup.html" class="btn--round btn btn--lg btn--white">Become a Seller</a>
                        </div>
                    </div>
                    <!-- end /.proposal -->
                </div>

                <div class="col-md-6 no-padding">
                    <div class="proposal proposal--right">
                        <div class="bg_image_holder">
                            <img src="images/sbg.png" alt="this is magic">
                        </div>
                        <div class="content_above">
                            <div class="proposal__icon">
                                <img src="images/sell.png" alt="Sell icon">
                            </div>
                            <div class="proposal__content ">
                                <h1 class="text--white">Looking For Products Or Services?</h1>
                                
                            </div>
                            <a href="user-all-products.html" class="btn--round btn btn--lg btn--white">Start Browsing</a>
                        </div>
                    </div>
                    <!-- end /.proposal -->
                </div>
            </div>
        </div>
        <!-- start container-fluid -->
    </section>
    <!--================================
    END SELL BUY
=================================-->

    <!--================================
    START TESTIMONIAL
=================================-->
    <!--================================
    END TESTIMONIAL
=================================-->

    <!--================================
    START LATEST NEWS
=================================-->
    <!--================================
    END LATEST NEWS
=================================-->

    <!--================================
    START SPECIAL FEATURES AREA
=================================-->
    <!--================================
    END SPECIAL FEATURES AREA
=================================-->

    <!--================================
    START CALL TO ACTION AREA
=================================-->
    
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
                                    <a href="user-category-grid.html">Vegetables</a>
                                </li>
                                <li>
                                    <a href="user-category-grid.html">Cereals</a>
                                </li>
                                <li>
                                    <a href="user-category-grid.html">Livestock</a>
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
                                    <a href="user-about.html">About Us</a>
                                </li>
                                <li>
                                    <a href="user-about.html">Our People</a>
                                </li>
                        
                                <li>
                                    <a href="user-contact.html">Contact Us</a>
                                </li>
                                
                            </ul>
                        </div>
                        <!-- end /.footer-menu -->

                        <div class="footer-menu">
                            <h4 class="footer-widget-title">Help & FAQ's</h4>
                            <ul>
                                <li>
                                    <a href="user-how-it-works.html">How It Works</a>
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
   