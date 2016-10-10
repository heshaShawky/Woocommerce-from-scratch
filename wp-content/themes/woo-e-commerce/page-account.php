<?php
/**
 * Template Name: My Account
 */
get_header();

do_action('woo_custom_breadcrumb');

if (have_posts()) {
    the_post();
    echo '<div class="container">';
    the_content();
    echo '</div>';
}


?>


<style>
    label, p, a {
        font-weight: 300;
    }
</style>

<?php get_footer();