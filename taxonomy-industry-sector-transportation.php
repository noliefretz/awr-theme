<?php get_header(); ?>

<div id="intro" class="industryCat transportation nfmPara">
    <div class="overlay">
        <div class="container">

            <h2>Transportation Supply</h2>
            <h3>Shop our <strong class="stroke-three transportation">transportation</strong> products online. Speedy shipping <strong class="stroke-two">worldwide</strong>.</h3>

        </div><!-- end container -->    
    </div><!-- end overlay -->
</div><!-- end banner -->


<?php get_template_part('template/taxonomy','sub'); ?>


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
    <div id="cs-con">
        <div class="container">
            
            <div class="row">
                <div class="col-sm-8">
                    
                    <h2>Transportation Supply</h2>

                    <h3>Alaska uses Steamships &amp; Trucks to deliver 90% of what we use and consume.</h3>

                    <p>We always say we're in the business to help move things or to keep them FROM moving. Our full line of tire chains, load chains, binders, straps and winches cover both goals. We also have one of the largest selections of helicopter cargo nets in the country!</p>
                    
                </div>
                <div class="col-sm-4">
                    
                    <div id="ship"><img src="<?php echo get_template_directory_uri(); ?>/images/transportation.svg" alt=""></div>
                    
                </div>
            </div>
            
        </div><!-- end contianer -->
    </div><!-- end cs-con -->
</div><!-- end costumerService --> 

<?php get_footer(); ?>