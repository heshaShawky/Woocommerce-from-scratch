<?php
/*
 * Template Name: Cart Page
 */

// Header of the site
get_header();


if ( have_posts() ) { the_post();
    // Cart Page Content 
    the_content();
}

// Footer of the site 
get_footer(); ?>


