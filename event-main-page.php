<?php 
   include "header.php";
   ?>

   <div class="breadcrumb">
    <div class="txt">
        <h2>Events</h2>
        <i class="fas fa-angle-double-right"></i>
        <a href="index.php">Home</a>
    </div>
    <div class="content-bg"></div>
   </div>

   <div class="event-main-content uk-container">
       <div class="uk-grid uk-child-width-1-2@l uk-flex-middle">
            <div class="wrapper" uk-scrollspy="cls: uk-animation-slide-left; delay: 500; repeat: false">
                <img src="./assets/img/img2.jpg" alt="">
            </div>

            <div class="wrapper" uk-scrollspy="cls: uk-animation-fade; delay: 300; repeat: false">
                <div class="wrap">
                <div class="date">
                    <span>November 1</span>
                </div>

                <div class="info uk-grid uk-child-width-1-2">
                    <div>
                        <i class="far fa-clock"></i>
                        <span>10:00 am - 5:00 pm</span>
                    </div>

                    <div>
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Dolpa, Nepal</span>
                    </div>

                    <div>
                        <i class="fas fa-phone-alt"></i>
                        <span>9845387354</span>
                    </div>

                    <div>
                        <i class="fas fa-envelope"></i>
                        <span>kharelkanchan22@gmail.com</span>
                    </div>
                </div>

                <div class="content" >
                    <h3>Dance Program</h3>
                    <p>Lorem Ipsum is simply  dummy text of the printing and typesetting industry. Lorem has been the industry's standrad dummy text ever since the 1500s, when an unknown.</p>
                    <span>-Organized By: ABC</span>
                </div>
                </div>
            </div>
       </div>
   </div>

    <div class="event">
        <div class="title">
            <h5>Other Events</h5>
            <h2>Other Upcoming Events & <br> Competition 2022</h2>
        </div>
        
        <?php 
        include "event-pages.php";
        ?>
    </div>

    <div id="resp_foot">

   <?php 
   include "footer.php";
   ?>
    </div>