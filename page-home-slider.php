<?php
/**
 *Template name: page-home-slider
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<div class="woven">
<img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/woven.png" alt="home page" />
</div>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="grid grid-pad main">
<!--<h2><?php the_title(); ?></h2>-->

<?php the_content(); ?>

<?php endwhile; ?>
</div><!--grid-->
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>