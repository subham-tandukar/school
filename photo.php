<?php 
   include "header.php";
   ?>

   <div class="breadcrumb">
    <div class="txt">
        <h2>Gallery</h2>
        <i class="fas fa-angle-double-right"></i>
        <a href="index.php">Home</a>
    </div>
    <div class="content-bg"></div>
   </div>

    <div class="gallery">
        <div class="title">
            <h5>Our Photos</h5>
            <h2>Our Best Photos</h2>
        </div>

        <div class="gallery-pages uk-container">
            <div class="uk-grid uk-child-width-1-3@m uk-child-width-1-2@s" uk-scrollspy="cls: uk-animation-slide-bottom; target: .wrapper; delay: 300; repeat: false">
            <?php 
            include "photo-pages.php";
            ?>
            </div>
        </div>
    </div>

    <div id="resp_foot">

   <?php 
   include "footer.php";
   ?>
    </div>