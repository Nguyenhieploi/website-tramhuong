<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION
// sửa vnd
add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);
function change_existing_currency_symbol( $currency_symbol, $currency ) {
 switch( $currency ) {
 case 'VND': $currency_symbol = 'VNĐ'; break;
 }
 return $currency_symbol;
}

// sửa add to cart
// 
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' ); 

function woo_custom_cart_button_text() {

return __( 'Thêm vào giỏ hàng', 'woocommerce' );
}



// ẩn category
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );


// thêm nút mua ngay
// 
add_action('woocommerce_after_add_to_cart_button','devvn_quickbuy_after_addtocart_button');
function devvn_quickbuy_after_addtocart_button(){
    global $product;
    ?>
    <style>
        .devvn-quickbuy button.single_add_to_cart_button.loading:after {
            display: none;
        }
        .devvn-quickbuy button.single_add_to_cart_button.button.alt.loading {
            color: #fff;
            pointer-events: none !important;
        }
		button.buy_now_button{
			background: -webkit-linear-gradient(top,#f59000,#fd6e1d);
			padding: 0px 60px;
			 animation: spin 1.5s ease-in-out infinite;
		}
		@keyframes spin {
  0%, 100% {
     tranform: scale(1); 
	  
  }
  50% {
     transform: scale(1.1);

  }
}
        .devvn-quickbuy button.buy_now_button {
            position: relative;
            color: rgba(255,255,255,0.05);
        }
        .devvn-quickbuy button.buy_now_button:after {
            animation: spin 500ms infinite linear;
            border: 2px solid #fff;
            border-radius: 32px;
            border-right-color: transparent !important;
            border-top-color: transparent !important;
            content: "";
            display: block;
            height: 16px;
            top: 50%;
            margin-top: -8px;
            left: 50%;
            margin-left: -8px;
            position: absolute;
            width: 16px;
        }
		.devvntow-quickbuy  button.buy_now_button{
			font-size:14px;
		}
    </style>
    <button type="button" class="button buy_now_button">
        <?php _e('ĐẶT HÀNG NGAY', 'devvn'); ?><br>
		
    </button>
    <input type="hidden" name="is_buy_now" class="is_buy_now" value="0" autocomplete="off"/>
    <script>
        jQuery(document).ready(function(){
            jQuery('body').on('click', '.buy_now_button', function(e){
                e.preventDefault();
                var thisParent = jQuery(this).parents('form.cart');
                if(jQuery('.single_add_to_cart_button', thisParent).hasClass('disabled')) {
                    jQuery('.single_add_to_cart_button', thisParent).trigger('click');
                    return false;
                }
                thisParent.addClass('devvn-quickbuy');
                jQuery('.is_buy_now', thisParent).val('1');
                jQuery('.single_add_to_cart_button', thisParent).trigger('click');
            });
        });
    </script>
    <?php
}
add_filter('woocommerce_add_to_cart_redirect', 'redirect_to_checkout');
function redirect_to_checkout($redirect_url) {
    if (isset($_REQUEST['is_buy_now']) && $_REQUEST['is_buy_now']) {
        $redirect_url = wc_get_checkout_url(); //or wc_get_cart_url()
    }
    return $redirect_url;
}


function my_custom_translations( $strings ) {
$text = array(
'Quick View' => 'Xem nhanh',
'SHOPPING CART' => 'Giỏ hàng',
'CHECKOUT DETAILS' => 'Thanh toán',
'ORDER COMPLETE' => 'Hoàn thành'
);

$strings = str_ireplace( array_keys( $text ), $text, $strings );
return $strings;
}
add_filter( 'gettext', 'my_custom_translations', 20 );

// sửa tab description
add_filter( 'woocommerce_product_tabs', 'woo_new_product_tab' );
function woo_new_product_tab( $tabs ) {
		$tabs['description']['title'] = __( 'Mô Tả' );
		return $tabs;
}
// sửa related product thành sp lien quan
add_filter("gettext", "rename_relatedproduct_text", 10, 3);
add_filter("ngettext", "rename_relatedproduct_text", 10, 3);
function rename_relatedproduct_text($translated, $text, $domain)
{
	if ($text === "Related products" && $domain === "woocommerce") {
		$translated = esc_html__("Sản phẩm liên quan", $domain);
	}
	return $translated;
}

// xóa bỏ các trường trong trang than toán
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
function custom_override_checkout_fields( $fields ) {
     unset($fields['billing']['billing_state']);
	 unset($fields['billing']['billing_company']);
	 unset($fields['billing']['billing_address_2']);
	 unset($fields['billing']['billing_postcode']);
	 unset($fields['billing']['billing_country']);
	 unset($fields['billing']['billing_email']);
	 unset($fields['billing']['order_comments']);
     return $fields;
}