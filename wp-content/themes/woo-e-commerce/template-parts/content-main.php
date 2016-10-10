<?php

$args = array(
    'post_type'     => 'product',
    'posts_per_page'=> 4,
    'product_cat'   => 't-shirts'
);

$products = new WP_Query($args);



?>

<!--content-->
<div class="content">
    <div class="container">
        <div class="content-top">
            <div class="content-top1">
                <div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
                    <div class="col-md1 simpleCart_shelfItem">
                        <a href="single.html">
                            <img class="img-responsive" src="<?php bloginfo("stylesheet_directory"); ?>/assets/images/pi5.png" alt="" />
                        </a>
                        <h3><a href="single.html">Palazzo</a></h3>
                        <div class="price">
                            <h5 class="item_price">$450</h5>
                            <a href="#" class="item_add">Add To Cart</a>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animated wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                    <div class="col-md3">
                        <div class="up-t">
                            <h3>Flat 50% Offer</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-md2 animated wow fadeInRight" data-wow-delay=".5s">
                    <div class="col-md1 simpleCart_shelfItem">
                        <a href="single.html">
                            <img class="img-responsive" src="<?php bloginfo("stylesheet_directory"); ?>/assets/images/pi4.png" alt="" />
                        </a>
                        <h3><a href="single.html">Pant</a></h3>
                        <div class="price">
                            <h5 class="item_price">$300</h5>
                            <a href="#" class="item_add">Add To Cart</a>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="content-top1 product">

               <?php while( $products->have_posts() ): $products->the_post(); global $product; ?>
                <div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
                    <div class="col-md1 simpleCart_shelfItem">
                        <a href="<?php echo get_permalink($products->post->ID )?>">
                            <?php woocommerce_show_product_sale_flash( ); ?>
                            <?php
                                if ( has_post_thumbnail( $products->post->ID ) ) {
                                    echo get_the_post_thumbnail($products->post->ID, 'shop_catalog', array('class'=>'img-responsive'));
                                }
                            ?>
                        </a>
                        <h3><a href="<?php echo get_permalink($products->post->ID )?>"><?php the_title(); ?></a></h3>
                        <div class="price">
                            <h5 class="item_price"><?php echo $product->get_price_html(); ?></h5>

                            <div class="clearfix"> </div>
                        </div>
                        <?php woocommerce_template_loop_add_to_cart( $products->post ); ?>

                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>



                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>

<?php

$args = array(
    'post_type'     => 'product',
    'posts_per_page'=> 4,
    'product_cat'   => 'music'
);

$products = new WP_Query($args);



?>



<div class="con-tp">
    <div class="container">
        <div class="col-md-4 con-tp-lft animated wow fadeInLeft" data-wow-delay=".5s">
            <a href="#">
                <div class="content-grid-effect slow-zoom vertical">
                    <div class="img-box"><img src="<?php bloginfo("stylesheet_directory")?>/assets/images/6.jpg" alt="image" class="img-responsive zoom-img"></div>
                    <div class="info-box">
                        <div class="info-content simpleCart_shelfItem">
                            <h4>30%offer</h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 con-tp-lft animated wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
            <a href="#">
                <div class="content-grid-effect slow-zoom vertical">
                    <div class="img-box"><img src="<?php bloginfo("stylesheet_directory")?>/assets/images/10.jpg" alt="image" class="img-responsive zoom-img"></div>
                    <div class="info-box">
                        <div class="info-content simpleCart_shelfItem">
                            <h4>45%offer</h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 con-tp-lft animated wow fadeInRight" data-wow-delay=".5s">
            <a href="#">
                <div class="content-grid-effect slow-zoom vertical">
                    <div class="img-box"><img src="<?php bloginfo("stylesheet_directory")?>/assets/images/9.jpg" alt="image" class="img-responsive zoom-img"></div>
                    <div class="info-box">
                        <div class="info-content simpleCart_shelfItem">
                            <h4>50%offer</h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-4 con-tp-lft animated wow fadeInLeft" data-wow-delay=".5s">
            <a href="#">
                <div class="content-grid-effect slow-zoom vertical">
                    <div class="img-box"><img src="<?php bloginfo("stylesheet_directory")?>/assets/images/12.jpg" alt="image" class="img-responsive zoom-img"></div>
                    <div class="info-box">
                        <div class="info-content simpleCart_shelfItem">
                            <h4>25%offer</h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 con-tp-lft animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
            <a href="#">
                <div class="content-grid-effect slow-zoom vertical">
                    <div class="img-box"><img src="<?php bloginfo("stylesheet_directory")?>/assets/images/13.jpg" alt="image" class="img-responsive zoom-img"></div>
                    <div class="info-box">
                        <div class="info-content simpleCart_shelfItem">
                            <h4>50%offer</h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 con-tp-lft animated wow fadeInRight" data-wow-delay=".5s">
            <a href="#">
                <div class="content-grid-effect slow-zoom vertical">
                    <div class="img-box"><img src="<?php bloginfo("stylesheet_directory")?>/assets/images/14.jpg" alt="image" class="img-responsive zoom-img"></div>
                    <div class="info-box">
                        <div class="info-content simpleCart_shelfItem">
                            <h4>35%offer</h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>


<div class="c-btm">
    <div class="content-top1">
        <div class="container">
            <?php while( $products->have_posts() ): $products->the_post(); global $product; ?>
                <div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
                    <div class="col-md1 simpleCart_shelfItem">
                        <a href="<?php echo get_permalink($products->post->ID )?>">
                            <?php
                            if ( has_post_thumbnail( $products->post->ID ) ) {
                                echo get_the_post_thumbnail($products->post->ID, 'shop_catalog', array('class'=>'img-responsive'));
                            }
                            ?>
                        </a>
                        <h3><a href="<?php echo get_permalink($products->post->ID )?>"><?php the_title(); ?></a></h3>
                        <div class="price">
                            <h5 class="item_price"><?php echo $product->get_price_html(); ?></h5>

                            <div class="clearfix"> </div>
                        </div>
                        <?php woocommerce_template_loop_add_to_cart( $products->post ); ?>

                    </div>
                </div>
            <?php endwhile; ?>

            <div class="clearfix"> </div>
        </div>
    </div>
</div>

<!--//content-->