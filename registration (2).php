<?php
/*
Template Name: Registration
*/
get_header(); ?>

<section class="login-area section pt-0">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-7 m-auto">

            <?php if(is_user_logged_in()){ ?>
                <a href="<?php bloginfo("url");?>/login">You are already Logged-in</a>
            <?php } else{ ?>
                
                <div class="my-form" >
                    <div class="form-group">
                        <h5>Register Your Account :</h5>
                    </div>
                    <?php echo do_shortcode('[wc_reg_form_bbloomer] '); ?>
                </div>
                
            <?php } ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer();?>