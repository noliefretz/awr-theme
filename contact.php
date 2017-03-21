<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>
<div id="contact-section">

    <div id="contact-banner" class="nfmPara">
        <div class="overlay">

            <div class="container">

                <h1>Contact Our Team</h1>

            </div>

        </div>
    </div><!-- enf contact-banner -->

    <div id="contact-form">
        <div class="overlay">

            <div class="container">

                <h2>get in touch</h2>

                <p>We love to hear from our customers, please feel free to call or email with any questions. </p>

                <div class="contact-details">
                    <span>6407 Arctic Spur Rd.</span>
                    <span>Anchorage, Ak. 99515</span>
                    <span>Hours of operation are 9:00 am-6:00 pm PST</span>
                </div>

                <form>

                    <div class="form-group">
                        <label for="contact-name"></label>
                        <input type="text" name="contact_name" class="form-control" id="contact-name" placeholder="Name">
                    </div>

                    <div class="form-group">
                        <label for="contact-email"></label>
                        <input type="email" name="contact_email" class="form-control" id="contact-email" placeholder="Email Address">
                    </div>

                    <div class="form-group">
                        <label for="contact-message"></label>
                        <textarea name="contact_message" class="form-control" id="contact-message" placeholder="Message"></textarea>
                    </div>

                    <button type="submit" class="btn btn-awr-submit">Submit</button>

                </form>

            </div>

        </div>
    </div><!-- end contact-form -->        
    
</div><!-- end contact section -->
    
<div id="customerService">
    <div id="cs-head">
        <div class="container">

            <div class="row">
                <div class="col-xs-3 left">
                    <span>
                        Expert<br/>
                        Customer<br/>
                        Service
                    </span>
                </div>
                <div class="col-xs-9 right">

                    <div class="row cs-info">
                        <div class="col-xs-4" id="cs-user">
                            <div><img src="<?php echo get_template_directory_uri(); ?>/images/philip-w.jpg" alt=""></div>
                            <strong>Philip W.</strong>
                            <p>Product Specalist</p>
                            <a href="#">Our Team <i class="icon-sprite icon-arrow-cirle-right-blue"></i></a>
                        </div>
                        <div class="col-xs-4" id="cs-contact">
                            <span class="strong">GET ADVICE:</span>
                            <span><i class="icon-sprite icon-phone"></i> <strong>(800) 478-0707</strong></span>
                            <span class="sched">M-F 10am-6pm PST</span>
                        </div>
                        <div class="col-xs-4">
                            <div id="cs-contact-us">
                                <a href="#"><i class="icon-sprite icon-mail"></i> Contact Us</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div><!-- end container -->                
    </div><!-- end cs-head -->
</div><!-- end costumerService --> 
<?php get_footer(); ?>