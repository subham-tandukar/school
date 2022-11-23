<?php 
   include "header.php";
   ?>

   <div class="breadcrumb">
    <div class="txt">
        <h2>Facility</h2>
        <i class="fas fa-angle-double-right"></i>
        <a href="index.php">Home</a>
    </div>
    <div class="content-bg"></div>
   </div>

   <div class="facility-main-content">
  
        <div class="uk-container">
            <div class="uk-grid uk-child-width-1-2@m uk-flex-middle">
                <div>
                <div class="bg" uk-scrollspy="cls: uk-animation-fade; delay: 500; repeat: false">
                    <h3>Dance Program</h3>
                    <p>Lorem Ipsum is simply  dummy text of the printing and typesetting industry. Lorem has been the industry's standrad dummy text ever since the 1500s, when an unknown printer took a gallery of type and scrambled it to make.</p>
                </div>
                </div>

                <div uk-scrollspy="cls: uk-animation-slide-bottom; delay: 700; repeat: false">
                    <img src="./assets/img/img2.jpg" alt="">
                </div>
            </div>
        </div>
       
   </div>

    <div class="facility" style="padding-top:5rem">
        <div class="title">
            <h5>Other Facility</h5>
            <h2>Our Other Facilities</h2>
        </div>
        
        <?php 
        include "facility-pages.php";
        ?>
    </div>

    <div id="resp_foot">

   <?php 
   include "footer.php";
   ?>
    </div>