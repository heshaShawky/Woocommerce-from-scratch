<?php
/**
 * Created by PhpStorm.
 * User: Hisham Shawky
 * Date: 02/10/2016
 * Time: 08:41 م
 * Template Name: Home Page
 */

// WebSite Header
get_header();

// Banner Slider
get_template_part("template-parts/content", "banner");

// Home Page main content
get_template_part("template-parts/content", "main");

// WebSite Footer
get_footer();