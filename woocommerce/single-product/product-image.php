<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.3.2
 */

defined( 'ABSPATH' ) || exit;

global $product;

$post_thumbnail_id = $product->get_image_id();

?>
<div class="product-slick">
	<?php
	if ( has_post_thumbnail() ) {
		$html  = custom_get_gallery_image_html( $post_thumbnail_id, true );
	} else {
		$html  = '<div class="woocommerce-product-gallery__image--placeholder">';
		$html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src() ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
		$html .= '</div>';
	}
	
	do_action( 'woocommerce_product_thumbnails' );
	?>
</div>

<div class="product-slick-nav">
	<?php
	if ( has_post_thumbnail() ) {
		$html  = custom_get_gallery_image_html( $post_thumbnail_id, true );
	} else {
		$html  = '<div class="woocommerce-product-gallery__image--placeholder">';
		$html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src() ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
		$html .= '</div>';
	}
	
	do_action( 'woocommerce_product_thumbnails' );
	?>
</div>

