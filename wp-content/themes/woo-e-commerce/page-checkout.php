<?php
/*
 * Template Name: Checkout Page
 */

// Header of the site
get_header();

if ( have_posts() ) {
    the_post();

    // Breadcrumbs   
    do_action('woo_custom_breadcrumb');
    
    // The Content
    echo '<div class="container">';
        // checkout Content
        the_content();
    echo '</div>';
}

get_footer();