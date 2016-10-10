<?php
/**
 * Single Product Rating
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/rating.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     2.3.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

if ( get_option( 'woocommerce_enable_review_rating' ) === 'no' ) {
	return;
}

$rating_count = $product->get_rating_count();
$review_count = $product->get_review_count();
$average      = $product->get_average_rating();

if ( $rating_count > 0 ) : ?>

	<div class="star-on">
		<ul>
			<?php for ($i = 0; $i < $average; $i++): ?>
				<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
			<?php endfor; ?>

			<?php for ($i = 0; $i < (5 - $average); $i++): ?>
				<li><a href="#"><i class="glyphicon glyphicon-star-empty"> </i></a></li>
			<?php endfor; ?>

		</ul>

		<div class="review">
			<a href="#reviews"> <?php echo $review_count . " review"?> </a>/
			<a href="#review_form_wrapper">  Write a review</a>
		</div>

		<div class="clearfix"></div>
	</div>

<?php endif; ?>
