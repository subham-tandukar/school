<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tapriza School and education</title>

    <!-- font awesome css -->
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/fontawesome.min.css">

    <!-- swiper css -->
    <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css">

    <!-- UIkit css -->
    <link rel="stylesheet" href="./assets/css/uikit.min.css" />

    <!-- user css -->
    <link href="./assets/css/style.css" rel="stylesheet">
</head>

<body>
<div class="pre-loader">
    <div class="loading">
        <div class="loader-icon">

        </div>
        <div class="img">
            <img src="./assets/img/tapri_logo.png" alt="loading">
        </div>
        <span>Loading... Please wait</span>
    </div>
</div>
<header>
        <div class="head uk-visible@l uk-flex uk-flex-middle uk-flex-between@s uk-flex-wrap">
            <div class="uk-margin-right head-info uk-flex uk-flex-wrap uk-flex-middle">
                <p><i class="fas fa-phone-alt uk-margin-small-right"></i>+977-9851073301 </p>
                <p><i class="fas fa-envelope uk-margin-small-right"></i>tapriza@gmail.com</p>
            </div>

            <div class="uk-margin-left head-icon">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="uk-margin-small-left"><i class="fab fa-twitter"></i></a>
                <a href="#" class="uk-margin-small-left"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <div class="site-nav uk-margin-small-bottom" uk-sticky="top:300; animation: uk-animation-slide-top;">
            <div class="uk-container uk-container-expand  uk-flex uk-flex-between uk-flex-middle uk-flex-wrap">
                <div class="logo">
                    <div>
                        <a href="index.php"><img src="./assets/img/tapri_logo.png" alt="logo"></a>
                    </div>
                    <div class="uk-margin-left">
                        <p class="p1">Tapriza School and education</p>
                    </div>
                </div>
                
                <nav class="uk-visible@l" uk-navbar>
                    <ul class="navbar uk-flex-middle">
                        <li><a href="index.php" class="nav-item">home</a></li>
                        <li><a href="about-us.php" class="nav-item">about</a></li>
                        <li><a href="facility.php" class="nav-item">facility</a></li>
                        <li><a href="event.php" class="nav-item">event</a></li>
                        <li><a href="gallery.php" class="nav-item">gallery</a></li>
                        
                        <li class="dropdown">
                            <a href="#" class="nav-item" >downloads<span uk-icon="icon: chevron-down"
                                    class="dropdown-icon"></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-dropdown-nav">
                                    <li><a href="#" class="dropdown-list">A/C opening form</a></li>
                                    <li><a href="#" class="dropdown-list">Other form</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="contact-us.php" class="nav-item">contact us</a></li>
                        <li><button class="uk-button uk-margin-small-left"><a href="admission-form.php">Admission Form</a></button></li>
                    </ul>
                </nav>

                <div class="uk-hidden@l uk-visible hamburger-menu">
                    <a href="#offcanvas-slide" uk-toggle><span uk-icon="icon: menu"></span></a>
                </div>
            </div>
        </div>

        <div id="offcanvas-slide" uk-offcanvas>
            <div class="overlay"></div>
            <div class="uk-offcanvas-bar">
                <button class="uk-offcanvas-close" type="button" title="close" uk-close></button>

                <div class="uk-flex uk-flex-middle uk-flex-center uk-flex-wrap uk-margin-top">
                    <div>
                        <a href="index.php"><img src="./assets/img/tapri_logo.png" alt="logo" style="width:60px"></a>
                    </div>
                    <div>
                        <p class="p1 uk-margin-remove " style="color:#fff; font-weight:bold">Tapriza School and education</p>
                    </div>
                </div>

                <hr class="uk-margin-remove-bottom">

                <ul class="navbar">
                    <li><a href="index.php">home</a></li>
                    <li><a href="about-us.php">about</a></li>
                    <li><a href="facility.php">facility</a></li>
                    <li><a href="event.php">event</a></li>
                    <li><a href="gallery.php">gallery</a></li>
                
                    <ul uk-accordion class="uk-margin-remove">                          
                        <li class="uk-margin-remove">
                            <a href="#" class="uk-accordion-title">downloads<span uk-icon="icon: chevron-right"
                                    class="dropdown-icon"></span></a>
                            <div class="uk-accordion-content uk-margin-remove-top">
                                <ul class="uk-nav uk-dropdown-nav">
                                <li><a href="#" class="dropdown-list">A/C opening form</a></li>
                                <li><a href="#" class="dropdown-list">Other form</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <li><a href="contact-us.php">contact us</a></li>
                   
                </ul>
                <button class="uk-button"><a href="admission-form.php">Admission Form</a></button>
                <p style="color:#fff"><i class="fas fa-phone-alt uk-margin-small-right"></i>+977-9851073301 </p>
                <p style="color:#fff"><i class="fas fa-envelope uk-margin-small-right"></i>tapriza@gmail.com</p>
                <hr>
                <div>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="uk-margin-small-left"><i class="fab fa-twitter"></i></a>
                <a href="#" class="uk-margin-small-left"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <!-- <div class="header-bg"></div> -->
    </header>