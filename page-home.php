<?php
/**
 /**
 * Template Name: Page-home
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */

?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="main-home">
<?php the_content(); ?>
</div><!--main-home-->

<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>