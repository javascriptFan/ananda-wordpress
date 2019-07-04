<?php
/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

wc_print_notices();

/**
 * @hooked wc_empty_cart_message - 10
 */
do_action( 'woocommerce_cart_is_empty' );

?>

<div class="grve-empty-cart cart-empty">
	<div class="grve-empty-icon-wrapper">
		<i class="grve-icon-close-sm grve-text-primary-1"></i>
		<i class="grve-icon-cart"></i>
	</div>
	<div class="grve-h6"><?php esc_html_e( 'No products in the cart.', 'woocommerce' ); ?></div>
	<?php if ( wc_get_page_id( 'shop' ) > 0 ) : ?>
	<a class="grve-link-text grve-text-primary-1 grve-text-hover-black" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>"><?php esc_html_e( 'Return to shop', 'woocommerce' ) ?></a>
	<?php endif; ?>
</div>
