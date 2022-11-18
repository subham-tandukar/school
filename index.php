<?php 
   include "header.php";
   ?>

<!-- herobanner  -->
   <section class="hero-banner">
   <div class="swiper mySwiper-heroImg">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="./assets/img/hero-img1.jpg" alt="">
        </div>
        <div class="swiper-slide">
        <img src="./assets/img/hero-img2.jpg" alt="">
        </div>
        <div class="swiper-slide">
        <img src="./assets/img/hero-img3.jpg" alt="">
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
   </section>
<!-- herobanner  -->

<!-- why Choose us  -->
    <section class="why-choose-us">
        <div class="title">
            <h5>Why Choose Us?</h5>
            <h2>You can Choose us</h2>
        </div>

        <div class="content">
            <div class="uk-container">
                <div class="uk-grid uk-child-width-1-2@m uk-flex-middle">
                    <div uk-scrollspy="cls: uk-animation-fade; target: .wrap; delay: 500; repeat: false">
                        <div class="wrap">
                            <i class="fas fa-check-circle"></i>
                            <span>Educational field trips</span>
                        </div>
                        <div class="wrap">
                            <i class="fas fa-check-circle"></i>
                            <span>Comprehensive reporting on individual achievement</span>
                        </div>
                        <div class="wrap">
                            <i class="fas fa-check-circle"></i>
                            <span>Individual attention in a small-class</span>
                        </div>
                    </div>

                    <div uk-scrollspy="cls: uk-animation-slide-right
                    ; target: .bg; delay: 700; repeat: false">
                        <div class="bg">
                            <h5>The Tapriza School</h5>
                            <p>Since 1998 the Tapriza NGO Switzerland supports a boarding school in the remote district Dolpo in north-western Nepal. The school gives a Tibetan speaking minority access to education and offers the possibility to learn their own language, history.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-bg"></div>
    </section>
<!-- why Choose us  -->

<!-- our facilities  -->
    <section class="our-facility">
        <div class="title">
            <h5>Our Facility</h5>
            <h2>Our popular Facilities</h2>
        </div>

        <div class="content">
            <div class="uk-container">
            <div class="swiper mySwiper-facility uk-margin-top">
                    <div class="swiper-wrapper"
                        uk-scrollspy="cls: uk-animation-slide-bottom; target: .wrapper; delay: 300; repeat: true">

                        <div class="swiper-slide wrapper">
                            <a href="facility.php">
                                <img src="./assets/img/img2.jpg" alt="">
                                <h5>Facility</h5>
                            </a>
                            <div class="overlay"></div>
                        </div>
                        <div class="swiper-slide wrapper">
                           <a href="facility.php">
                                <img src="./assets/img/img2.jpg" alt="">
                                <h5>Facility</h5>
                           </a>
                           <div class="overlay"></div>
                        </div>
                        <div class="swiper-slide wrapper">
                           <a href="facility.php">
                                <img src="./assets/img/img2.jpg" alt="">
                                <h5>Facility</h5>
                           </a>
                           <div class="overlay"></div>
                        </div>
                        <div class="swiper-slide wrapper">
                           <a href="facility.php">
                                <img src="./assets/img/img2.jpg" alt="">
                                <h5>Facility</h5>
                           </a>
                           <div class="overlay"></div>
                        </div>
                        <div class="swiper-slide wrapper">
                           <a href="facility.php">
                                <img src="./assets/img/img2.jpg" alt="">
                                <h5>Facility</h5>
                           </a>
                           <div class="overlay"></div>
                        </div>
                        <div class="swiper-slide wrapper">
                           <a href="facility.php">
                                <img src="./assets/img/img2.jpg" alt="">
                                <h5>Facility</h5>
                           </a>
                           <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="swiper-pagination uk-flex uk-flex-center uk-flex-middle"></div>
                </div>
            </div>
        </div>

        <div class="content-bg"></div>
    </section>
<!-- our facilities  -->

<!-- admission  -->
    <section class="admission">
        <div class="uk-container">
            <div class="content">
                <span>Hurry Up!</span>
                <h1 style="--n:53">Our Admission is <br> Open Now...</h1>
                <button class="uk-button"><a href="admission-form.php">Admission Form</a></button>
            </div>
        </div>
        <div class="overlay-bg"></div>
    </section>
<!-- admission  -->

<!-- our events  -->
<section class="our-event">
        <div class="title">
            <h5>Our Event</h5>
            <h2>Our Upcoming Events & <br> Competition 2022</h2>
        </div>

        <div class="content">
            <div class="uk-container">
                <div class="swiper mySwiper-event uk-margin-top">
                    <div class="swiper-wrapper" uk-scrollspy="cls: uk-animation-slide-bottom; target: .wrapper; delay: 300; repeat: true">
                            <div class="swiper-slide wrapper">
                                <div class="uk-grid uk-child-width-1-2@m uk-flex-middle">
                                    <div>
                                        <div class="event-img">
                                            <img src="./assets/img/img2.jpg" alt="">

                                            <div class="event-detail" >
                                                <span><i class="far fa-clock uk-margin-small-right"></i>10:00 AM - 5:00 PM</span>
                                                <span><i class="fas fa-map-marker-alt uk-margin-small-right"></i>Dolpa,Nepal</span>
                                            </div>

                                            <div class="event-date">
                                                <span>November 1</span>
                                                <div class="border"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="event-content" >
                                            <h3>Dance Program</h3>
                                            <p>Lorem Ipsum is simply  dummy text of the printing and typesetting industry. Lorem has been the industry's standrad dummy text ever since the 1500s, when an unknown printer took a gallery of type and scrambled it to make.</p>
                                            <button class="uk-button"><a href="event.php">View More</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="swiper-slide wrapper">
                                <div class="uk-grid uk-child-width-1-2@m uk-flex-middle">
                                    <div>
                                        <div class="event-img">
                                            <img src="./assets/img/img2.jpg" alt="">

                                            <div class="event-detail" >
                                                <span><i class="far fa-clock uk-margin-small-right"></i>10:00 AM - 5:00 PM</span>
                                                <span><i class="fas fa-map-marker-alt uk-margin-small-right"></i>Dolpa,Nepal</span>
                                            </div>

                                            <div class="event-date">
                                                <span>November 1</span>
                                                <div class="border"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="event-content" >
                                            <h3>Dance Program</h3>
                                            <p>Lorem Ipsum is simply  dummy text of the printing and typesetting industry. Lorem has been the industry's standrad dummy text ever since the 1500s, when an unknown printer took a gallery of type and scrambled it to make.</p>
                                            <button class="uk-button"><a href="event.php">View More</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide wrapper">
                                <div class="uk-grid uk-child-width-1-2@m uk-flex-middle">
                                    <div>
                                        <div class="event-img">
                                            <img src="./assets/img/img2.jpg" alt="">

                                            <div class="event-detail" >
                                                <span><i class="far fa-clock uk-margin-small-right"></i>10:00 AM - 5:00 PM</span>
                                                <span><i class="fas fa-map-marker-alt uk-margin-small-right"></i>Dolpa,Nepal</span>
                                            </div>

                                            <div class="event-date">
                                                <span>November 1</span>
                                                <div class="border"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="event-content" >
                                            <h3>Dance Program</h3>
                                            <p>Lorem Ipsum is simply  dummy text of the printing and typesetting industry. Lorem has been the industry's standrad dummy text ever since the 1500s, when an unknown printer took a gallery of type and scrambled it to make.</p>
                                            <button class="uk-button"><a href="event.php">View More</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="swiper-pagination uk-flex uk-flex-center uk-flex-middle"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-bg"></div>
    </section>
<!-- our events  -->

<!-- our gallery  -->
    <section class="our-gallery">
        <div class="title">
            <h5 style="color: #f59934">Our Gallery</h5>
            <h2 style="color: #fff">Our Best Photos & <br> Videos</h2>
        </div>

        <div class="uk-flex uk-flex-center uk-margin-medium-top">
            <div class="photo-btn uk-margin-small-right">
                <button class="uk-button p">Photo</button>
            </div>
            <div class="video-btn uk-margin-small-left">
                <button class="uk-button v">Video</button>
            </div>
        </div>

        <div class="content">
            <div class="uk-container">
            <div class="swiper mySwiper-gallery uk-margin-top photo">
                    <div class="swiper-wrapper "
                        uk-scrollspy="cls: uk-animation-slide-bottom; target: .gallery-wrapper; delay: 300; repeat: true">
                        <div class="swiper-slide gallery-wrapper">
                            <div class="uk-position-relative">
                                <a href="gallery.php">
                                    <div class="gallery-img">
                                        <img src="./assets/img/img2.jpg" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide gallery-wrapper">
                            <div class="uk-position-relative">
                                <a href="gallery.php">
                                    <div class="gallery-img">
                                        <img src="./assets/img/img2.jpg" alt="">
                                       
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide gallery-wrapper">
                            <div class="uk-position-relative">
                                <a href="gallery.php">
                                    <div class="gallery-img">
                                        <img src="./assets/img/img2.jpg" alt="">
                                       
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide gallery-wrapper">
                            <div class="uk-position-relative">
                                <a href="gallery.php">
                                    <div class="gallery-img">
                                        <img src="./assets/img/img2.jpg" alt="">
                                       
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide gallery-wrapper">
                            <div class="uk-position-relative">
                                <a href="gallery.php">
                                    <div class="gallery-img">
                                        <img src="./assets/img/img2.jpg" alt="">
                                       
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide gallery-wrapper">
                            <div class="uk-position-relative">
                                <a href="gallery.php">
                                    <div class="gallery-img">
                                        <img src="./assets/img/img2.jpg" alt="">
                                       
                                    </div>
                                </a>
                            </div>
                        </div>
                       
                    </div>

                   <div class="swiper-pagination uk-flex uk-flex-center uk-flex-middle"></div>
                </div>

                <div class="swiper mySwiper-gallery uk-margin-top video d-none">
                    <div class="swiper-wrapper "
                        uk-scrollspy="cls: uk-animation-slide-bottom; target: .gallery-wrapper; delay: 300; repeat: true">
                        <div class="swiper-slide gallery-wrapper">
                            <div class="uk-position-relative">
                                <a href="gallery.php">
                                    <div class="gallery-img">
                                        <img src="./assets/img/img3.jpg" alt="">
                                       
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide gallery-wrapper">
                            <div class="uk-position-relative">
                                <a href="gallery.php">
                                    <div class="gallery-img">
                                        <img src="./assets/img/img3.jpg" alt="">
                                       
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide gallery-wrapper">
                            <div class="uk-position-relative">
                                <a href="gallery.php">
                                    <div class="gallery-img">
                                        <img src="./assets/img/img3.jpg" alt="">
                                       
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide gallery-wrapper">
                            <div class="uk-position-relative">
                                <a href="gallery.php">
                                    <div class="gallery-img">
                                        <img src="./assets/img/img3.jpg" alt="">
                                       
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide gallery-wrapper">
                            <div class="uk-position-relative">
                                <a href="gallery.php">
                                    <div class="gallery-img">
                                        <img src="./assets/img/img3.jpg" alt="">
                                       
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide gallery-wrapper">
                            <div class="uk-position-relative">
                                <a href="gallery.php">
                                    <div class="gallery-img">
                                        <img src="./assets/img/img3.jpg" alt="">
                                       
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                   <div class="swiper-pagination uk-flex uk-flex-center uk-flex-middle"></div>
                </div>
            </div>
        </div>

        <div class="content-bg">
            <div class="overlay-bg"></div>
        </div>
    </section>
<!-- our gallery  -->

   
<?php 
   include "footer.php";
   ?>