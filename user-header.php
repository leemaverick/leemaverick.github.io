<?php 
session_start();
if(!isset($_SESSION['customer']))
{
    header("location:login.php");
}

include("connection.php");
error_reporting(0);


$cust= $_SESSION['customer'];
?>

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
                            
                            <a href="signup.php" class="author-area__seller-btn inline">Become A Seller</a>
                            <a href="signup.php" class="author-area__seller-btn inline">SignIn As Seller</a>
                            
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
                                        <?php echo $cust; ?></b>
                                    </p>
                                    
                                </div>

                                <div class="dropdowns dropdown--author">
                                    <ul>
                                        <li>
                                            <a href="log-author.html">
                                                <span class="lnr lnr-user"></span>Profile</a>
                                        </li>
                                       
                                        <li>
                                            <a href="log-dashboard-setting.php">
                                                <span class="lnr lnr-cog"></span> Settings</a>
                                        </li>
                                        
                                        <li>
                                            <a href="log-dashboard-upload.php">
                                                <span class="lnr lnr-upload"></span>Topics</a>
                                        </li>
                                        <li>
                                            <a href="log-dashboard-manage-item.php">
                                                <span class="lnr lnr-book"></span>Help Center</a>
                                        </li>
                                        <li>
                                            <a href="user-logout.php">
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
                                            <?php echo $cust; ?></b>
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
                                            <a href="log-author.php">
                                                <span class="lnr lnr-user"></span>Profile</a>
                                        </li>
                                       
                                        <li>
                                            <a href="log-dashboard-setting.php">
                                                <span class="lnr lnr-cog"></span> Settings</a>
                                        </li>
                                        
                                        <li>
                                            <a href="log-dashboard-upload.php">
                                                <span class="lnr lnr-enter"></span>SignIn As Seller</a>
                                        </li>
                                        <li>
                                            <a href="log-dashboard-manage-item.php">
                                                <span class="lnr lnr-book"></span>Help Center</a>
                                        </li>
                                        <li>
                                            <a href="user-logout.php">
                                                <span class="lnr lnr-exit"></span>Logout</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="text-center">
                                <a href="signup.php" class="author-area__seller-btn inline">Become A Seller</a>
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
