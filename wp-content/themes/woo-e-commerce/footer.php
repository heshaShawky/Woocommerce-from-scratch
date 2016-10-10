<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Woo_E-commerce
 */

?>


<div class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="col-md-6 top-footer animated wow fadeInLeft" data-wow-delay=".5s">
				<h3>Follow Us On</h3>
				<div class="social-icons">
					<ul class="social">
						<li><a href="#"><i></i></a> </li>
						<li><a href="#"><i class="facebook"></i></a></li>
						<li><a href="#"><i class="google"></i> </a></li>
						<li><a href="#"><i class="linked"></i> </a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-6 top-footer1 animated wow fadeInRight" data-wow-delay=".5s">
				<h3>Newsletter</h3>
				<form action="#" method="post">
					<input type="text" name="email" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
					<input type="submit" value="SUBSCRIBE">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="col-md-3 footer-bottom-cate animated wow fadeInLeft" data-wow-delay=".5s">
				<h6>Categories</h6>
				<ul>
					<?php

					$taxonomy     = 'product_cat';
					$orderby      = 'name';
					$show_count   = 0;      // 1 for yes, 0 for no
					$pad_counts   = 0;      // 1 for yes, 0 for no
					$hierarchical = 1;      // 1 for yes, 0 for no
					$title        = '';
					$empty        = 0;

					$args = array(
						'taxonomy'     => $taxonomy,
						'orderby'      => $orderby,
						'show_count'   => $show_count,
						'pad_counts'   => $pad_counts,
						'hierarchical' => $hierarchical,
						'title_li'     => $title,
						'hide_empty'   => $empty
					);
					$all_categories = get_categories( $args );
					foreach ($all_categories as $cat) {
						if ($cat->category_parent == 0) {
							echo "<li><a href='". get_term_link($cat->slug, 'product_cat') ."'>$cat->name</a></li> ";
						}
					}
					?>
				</ul>
			</div>
			<div class="col-md-3 footer-bottom-cate animated wow fadeInLeft" data-wow-delay=".5s">
				<h6>Feature Projects</h6>
				<ul>
					<li><a href="products.html">Dignissim purus</a></li>
					<li><a href="men.html">Curabitur sapien</a></li>
					<li><a href="single.html">Tempus pretium</a></li>
					<li><a href="men.html">Dignissim neque</a></li>
					<li><a href="products.html">Ornared id aliquet</a></li>
				</ul>
			</div>
			<div class="col-md-3 footer-bottom-cate animated wow fadeInRight" data-wow-delay=".5s">
				<h6>Top Brands</h6>
				<ul>
					<li><a href="products.html">Tempus pretium</a></li>
					<li><a href="single.html">Curabitur sapien</a></li>
					<li><a href="men.html">Dignissim purus</a></li>
					<li><a href="single.html">Dignissim neque</a></li>
					<li><a href="men.html">Ornared id aliquet</a></li>


				</ul>
			</div>
			<div class="col-md-3 footer-bottom-cate cate-bottom animated wow fadeInRight" data-wow-delay=".5s">
				<h6>Our Address</h6>
				<ul>
					<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : 12th Avenue, 5th block, <span>Sydney.</span></li>
					<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">info@example.com</a></li>
					<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : +1234 567 567</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<p class="footer-class animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"> © 2016 Youth Fashion . All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>
	</div>
</div>

</div><!-- #page -->

<script>
	$(document).ready(function() {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});

		$(window).load(function() {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});

	});
</script>

<?php wp_footer(); ?>

</body>
</html>
