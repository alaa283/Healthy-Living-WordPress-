<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package erase
 */
get_header();

while(have_posts())
{ 
    the_post();
    the_content();
    ?>

 <!-- <div class="row">
<div class="col-6"></div>
<div class="col-6">
<?php //echo FrmFormsController::get_form_shortcode( array( 'id' => 2, 'title' => false, 'description' => false ) ); ?>
</div>
</div> -->
<?php
}
get_footer();
?>