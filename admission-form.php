<?php 
   include "header.php";
   ?>

   <div class="breadcrumb">
    <div class="txt">
        <h2>Admission Form</h2>
        <i class="fas fa-angle-double-right"></i>
        <a href="index.php">Home</a>
    </div>
    <div class="content-bg"></div>
   </div>

    <div class="contact admission-form">
        <div class="title">
            <h5>Please fill all the required field</h5>
            <h2>Student Admission Form</h2>
        </div>
        
        <div class="content uk-container ">
            <form class="uk-margin-remove">
                <div class="uk-grid uk-child-width-1-3@m uk-child-width-1-2@s">
                    <div class="form-field">
                        <input type="text" id="firstname" class="uk-input" required>
                        <label class="control-label" for="firstname">First name*</label>
                    </div>

                    <div class="form-field">
                        <input type="text" id="middlename" class="uk-input">
                        <label class="control-label" for="middlename">Middle name</label>
                    </div>

                    <div class="form-field">
                        <input type="text" id="lastname" class="uk-input" required>
                        <label class="control-label" for="lastname">Last name*</label>
                    </div>
                    
                    <div class="form-field">
                        <input type="text" id="address" class="uk-input" required>
                        <label for="address">Address*</label>
                    </div>

                    <div class="form-field">
                        <input type="date" id="dob" class="uk-input" required>
                        <label class="control-label" for="dob">Date of birth*</label>
                    </div>

                    <div class="uk-margin-bottom">
                        <label class="control-label" style="color:#000">Gender*</label>
                        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                            <label><input class="uk-radio" type="radio" name="radio2" checked> Male</label>
                            <label><input class="uk-radio" type="radio" name="radio2"> Female</label>
                            <label><input class="uk-radio" type="radio" name="radio2"> Other</label>
                        </div>
                    </div>

                    <div class="form-field">
                        <input type="number" id="contact" class="uk-input" required>
                        <label for="contact">Contact*</label>
                    </div>
                    
                    <div class="form-field ">
                        <div uk-form-custom="target: true">
                            <input type="file" aria-label="Custom controls">
                            <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" aria-label="Custom controls" disabled>
                        </div>
                        <label class="control-label" style="color:#000">Choose file</label>
                    </div>

                </div>

                <button class="uk-button" type="submit">
                    <a>Submit</a>
                </button>
            </form>
        </div>

    </div>

   <?php 
   include "footer.php";
   ?>