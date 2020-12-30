<?php
/*
Template Name: Login
*/
get_header(); 
?>

<section class="login-area pt-0 mb-20">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 m-auto">
                <?php
                    if(is_user_logged_in()){
                        echo '<a href="#">User is logged in</a>';
                    } else{ ?>
                <form class="woocommerce-form woocommerce-form-login login my-form" method="post">

                    <?php do_action( 'woocommerce_login_form_start' ); ?>
                    <div class="form-group">
                        <h5>Login Your Account :</h5>
                    </div>
                    <div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide form-group">
                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" placeholder="Enter email" name="username" id="username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
                    </div>
                    <div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide form-group">
                        <input class="woocommerce-Input woocommerce-Input--text input-text form-control" type="password" placeholder="Enter password" name="password" id="password" autocomplete="current-password" />
                    </div>

                    <?php do_action( 'woocommerce_login_form' ); ?>

                    <div class="form-group">
                        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme form-check-label">
                            <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></span>
                        </label>
                    </div>
                    <div class="form-group">
                        <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
                        <div class="my-btn">
                            <button type="submit" class="woocommerce-button button woocommerce-form-login__submit button" style="justify-content: center;" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Log in', 'woocommerce' ); ?></button>
                        </div>
                    </div>
                    <div class="woocommerce-LostPassword lost_password form-group form-link">
                        <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Lost your password?', 'woocommerce' ); ?></a>
                    </div>

                    <?php do_action( 'woocommerce_login_form_end' ); ?>

                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>