<?php 
   include "header.php";
   ?>

   <div class="breadcrumb">
    <div class="txt">
        <h2>Contact Us</h2>
        <i class="fas fa-angle-double-right"></i>
        <a href="index.php">Home</a>
    </div>
    <div class="content-bg"></div>
   </div>

    <div class="contact">
        <div class="title">
            <h5>Contact us</h5>
            <h2>Feel free to contact us</h2>
        </div>
        
        <div class="content uk-container">
            <div class="uk-grid">
                <div class="uk-width-expand ">
                    <div class="uk-padding">
                        <h5>Send us a message and we'll respond within 24 hours.</h5>
    
                        <form>
                            <div class="uk-grid uk-child-width-1-2@s">
                                <div class="form-field">
                                    <input type="text" id="fullname" class="uk-input" required>
                                    <label class="control-label" for="fullname">Fullname*</label>
                                </div>
                                <div class="form-field">
                                    <input type="email" id="email" class="uk-input" required>
                                    <label for="email">Email*</label>
                                </div>
                                <div class="form-field">
                                    <input type="number" id="contact" class="uk-input" required>
                                    <label for="contact">Contact*</label>
                                </div>
                                <div class="form-field">
                                    <input type="text" id="organisation" class="uk-input" required>
                                    <label for="organisation">Organisation*</label>
                                </div>
                            </div>
                            <div class="form-field">
                                <textarea class="uk-textarea" rows="5" id="message" aria-label="Textarea"></textarea>
                                <label for="message">Message</label>
                            </div>
    
                            <button class="uk-button" type="submit">
                                <a>Submit</a>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="uk-width-1-4@m uk-width-1-3@s contact-info">
                    <div class="wrapper">
                        <i class="fas fa-phone-alt"></i>
                        <p>+977-9851073301</p>
                    </div>
                    <div class="wrapper">
                        <i class="fas fa-envelope"></i>
                        <p>tapriza@gmail.com</p>
                    </div>
                    <div class="wrapper">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Dolpa, Nepal</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="uk-margin-medium-top">

            <div class="title">
                <h5>Our Location</h5>
                <h2>You can find us at</h2>
            </div>
    
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56516.316259514366!2d85.29111321978858!3d27.708955944403495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e0!3m2!1sen!2snp!4v1668506471439!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </div>

   <?php 
   include "footer.php";
   ?>