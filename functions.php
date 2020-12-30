<?php
define( 'theme_path', get_template_directory_uri().'/' );
define( 'my_account_url', get_permalink( get_option('woocommerce_myaccount_page_id') ));
define( 'shop_url', get_permalink( wc_get_page_id( 'shop' ) ) );

/** Theme Support */
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
add_theme_support( 'woocommerce' );
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

/** Remove WC Actions */
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
add_action( 'woo_custom_catalog_ordering', 'woocommerce_catalog_ordering', 30 );

/** Remove form single page*/
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );

/** Theme Menu Support */
require "libs/nav-menus.php";

/** Bootstrap Navigation Walker */
require "libs/class-wp-bootstrap-navwalker.php";

/** Widget Support */
require "libs/widget.php";

/** Custom Function */
require "libs/custom.php";

/** WooCommerce Hooks */
require "libs/wc-hooks.php";


add_shortcode( 'wc_reg_form_bbloomer', 'bbloomer_separate_registration_form' );

function bbloomer_separate_registration_form() {
    if ( is_admin() ) return;
    if ( is_user_logged_in() ) return;
    ob_start();

    // NOTE: THE FOLLOWING <FORM></FORM> IS COPIED FROM woocommerce\templates\myaccount\form-login.php
    // IF WOOCOMMERCE RELEASES AN UPDATE TO THAT TEMPLATE, YOU MUST CHANGE THIS ACCORDINGLY

    do_action( 'woocommerce_before_customer_login_form' );

    ?>
    <form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >

        <?php do_action( 'woocommerce_register_form_start' ); ?>

        <?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                <label for="reg_username"><?php esc_html_e( 'Username', 'woocommerce' ); ?> <span class="required">*</span></label>
                <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
            </p>

        <?php endif; ?>

            <!--<div class="col-md-6">-->
                <!--<input type="email" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="email" placeholder="Email address" id="reg_email" autocomplete="email" value="<?php //echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /> -->
            <!--</div>-->

            <div class="col-md-12">
                <?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                        <label for="reg_password"><?php esc_html_e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
                        <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" />
                    </p>

                <?php else : ?>

                    <p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>

                <?php endif; ?>
                <?php do_action( 'woocommerce_register_form' ); ?>
                <p class="woocommerce-FormRow form-row" style="margin-top: 20px">
                    <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
                    <button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
                </p>
            </div>
        <?php do_action( 'woocommerce_register_form_end' ); ?>
    </form>
    <?php
    return ob_get_clean();
}

add_shortcode( 'wc_login_form_bbloomer', 'bbloomer_separate_login_form' );
function bbloomer_separate_login_form() {
    if ( is_admin() ) return;
    if ( is_user_logged_in() ) return;
    ob_start();
    woocommerce_login_form( array( 'redirect' => 'https://custom.url' ) );
    return ob_get_clean();
}
function your_prefix_redirect() {
    wp_redirect('http://dev1.rezzkey.com');
    die;
}






// Add Aditional Fields
add_action( 'woocommerce_register_form_start', 'bbloomer_add_name_woo_account_registration' );
function bbloomer_add_name_woo_account_registration() {
    ?>
    <div class="form-group row">
    <div class="col-md-6">
        <input type="text" class="input-text form-control" name="billing_first_name" placeholder="First Name*" id="reg_billing_first_name" value="<?php if ( ! empty( $_POST['billing_first_name'] ) ) esc_attr_e( $_POST['billing_first_name'] ); ?>" required/>
    </div>

    <div class="col-md-6">
        <input type="text" class="input-text form-control" name="billing_last_name" placeholder="Last Name*" id="reg_billing_last_name" value="<?php if ( ! empty( $_POST['billing_last_name'] ) ) esc_attr_e( $_POST['billing_last_name'] ); ?>" required/>
    </div>
    
    <div class="col-md-6">
        <input type="email" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="email" placeholder="Email address*" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" required/><?php // @codingStandardsIgnoreLine ?>
    </div>
    
    <div class="col-md-6">
        <input type="text" class="input-text form-control" name="billing_phone" placeholder="Phone*" id="reg_billing_phone" value="<?php if ( ! empty( $_POST['billing_phone'] ) ) esc_attr_e( $_POST['billing_phone'] ); ?>" required/>
    </div>
    
    <div class="col-md-12">
        <input type="text" class="input-text form-control" name="billing_address_1" placeholder="Address 1*" id="reg_billing_address_1" value="<?php if ( ! empty( $_POST['billing_address_1'] ) ) esc_attr_e( $_POST['billing_address_1'] ); ?>" required/>
    </div>
    
    <div class="col-md-12">
        <input type="text" class="input-text form-control" name="billing_address_2" placeholder="Address 2 (Optional)" id="reg_billing_address_2" value="<?php if ( ! empty( $_POST['billing_address_2'] ) ) esc_attr_e( $_POST['billing_address_2'] ); ?>" />
    </div>
    
    <div class="col-md-6">
        <input type="text" class="input-text form-control" name="billing_city" placeholder="City*" id="reg_billing_city" value="<?php if ( ! empty( $_POST['billing_city'] ) ) esc_attr_e( $_POST['billing_city'] ); ?>" required/>
    </div>
    
    <div class="col-md-6">
        <input type="text" class="input-text form-control" name="billing_state" placeholder="State*" id="reg_billing_state" value="<?php if ( ! empty( $_POST['billing_state'] ) ) esc_attr_e( $_POST['billing_state'] ); ?>" required/>
    </div>
    
    <div class="col-md-12">
        <input type="text" class="input-text form-control" name="billing_postcode" placeholder="Zip/Postal Code*" id="reg_billing_postcode" value="<?php if ( ! empty( $_POST['billing_postcode'] ) ) esc_attr_e( $_POST['billing_postcode'] ); ?>" required/>
    </div>
    
    <div class="clear"></div>

    <?php
}

// Validate Fields
add_filter( 'woocommerce_registration_errors', 'bbloomer_validate_name_fields', 10, 3 );
function bbloomer_validate_name_fields( $errors, $username, $email ) {
    if ( isset( $_POST['billing_first_name'] ) && empty( $_POST['billing_first_name'] ) ) {
        $errors->add( 'billing_first_name_error', __( '<strong>Error</strong>: First name is required!', 'woocommerce' ) );
    }
    if ( isset( $_POST['billing_last_name'] ) && empty( $_POST['billing_last_name'] ) ) {
        $errors->add( 'billing_last_name_error', __( '<strong>Error</strong>: Last name is required!.', 'woocommerce' ) );
    }
    if ( isset( $_POST['billing_phone'] ) && empty( $_POST['billing_phone'] ) ) {
        $errors->add( 'billing_phone_error', __( '<strong>Error</strong>: Phone Number is required!.', 'woocommerce' ) );
    }
    if ( isset( $_POST['billing_address_1'] ) && empty( $_POST['billing_address_1'] ) ) {
        $errors->add( 'billing_address_1_error', __( '<strong>Error</strong>: Address is required!.', 'woocommerce' ) );
    }
    if ( isset( $_POST['billing_city'] ) && empty( $_POST['billing_city'] ) ) {
        $errors->add( 'billing_city_error', __( '<strong>Error</strong>: City is required!.', 'woocommerce' ) );
    }
    if ( isset( $_POST['billing_state'] ) && empty( $_POST['billing_state'] ) ) {
        $errors->add( 'billing_state_error', __( '<strong>Error</strong>: State is required!.', 'woocommerce' ) );
    }
    if ( isset( $_POST['billing_postcode'] ) && empty( $_POST['billing_postcode'] ) ) {
        $errors->add( 'billing_postcode_error', __( '<strong>Error</strong>: Zip/Postcode Code is required!.', 'woocommerce' ) );
    }
    return $errors;
}

// Save Fields
add_action( 'woocommerce_created_customer', 'bbloomer_save_name_fields' );

function bbloomer_save_name_fields( $customer_id ) {
    if ( isset( $_POST['billing_first_name'] ) ) {
        update_user_meta( $customer_id, 'billing_first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
        update_user_meta( $customer_id, 'first_name', sanitize_text_field($_POST['billing_first_name']) );
    }
    if ( isset( $_POST['billing_last_name'] ) ) {
        update_user_meta( $customer_id, 'billing_last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
        update_user_meta( $customer_id, 'last_name', sanitize_text_field($_POST['billing_last_name']) );
    }
    if ( isset( $_POST['billing_phone'] ) ) {
        update_user_meta( $customer_id, 'billing_phone', sanitize_text_field( $_POST['billing_phone'] ) );
        update_user_meta( $customer_id, 'phone', sanitize_text_field($_POST['billing_phone']) );
    }
    if ( isset( $_POST['billing_address_1'] ) ) {
        update_user_meta( $customer_id, 'billing_address_1', sanitize_text_field( $_POST['billing_address_1'] ) );
        update_user_meta( $customer_id, 'address_1', sanitize_text_field($_POST['billing_address_1']) );
    }
    if ( isset( $_POST['billing_address_2'] ) ) {
        update_user_meta( $customer_id, 'billing_address_2', sanitize_text_field( $_POST['billing_address_2'] ) );
        update_user_meta( $customer_id, 'address_2', sanitize_text_field($_POST['billing_address_2']) );
    }
    if ( isset( $_POST['billing_city'] ) ) {
        update_user_meta( $customer_id, 'billing_city', sanitize_text_field( $_POST['billing_city'] ) );
        update_user_meta( $customer_id, 'city', sanitize_text_field($_POST['billing_city']) );
    }
    if ( isset( $_POST['billing_state'] ) ) {
        update_user_meta( $customer_id, 'billing_state', sanitize_text_field( $_POST['billing_state'] ) );
        update_user_meta( $customer_id, 'state', sanitize_text_field($_POST['billing_state']) );
    }
    if ( isset( $_POST['billing_postcode'] ) ) {
        update_user_meta( $customer_id, 'billing_postcode', sanitize_text_field( $_POST['billing_postcode'] ) );
        update_user_meta( $customer_id, 'postcode', sanitize_text_field($_POST['billing_postcode']) );
    }
}

/* After login redirect to my-account-page */
add_action('wp', 'add_login_check');
function add_login_check(){
    if (is_user_logged_in()) {
        if (is_page(124)){
            wp_redirect('/my-account');
            exit; 
        }
    }
}
