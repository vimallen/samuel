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
 <?php /* if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } */ ?>
<div class="main">
  <div class="intro-home">
  <?php the_content(); ?>
</div>
<?php
          $loop = new WP_Query(array('post_type' => 'module-home',
          'posts_per_page' => 10,
          'orderby'=>'title',
           'order'=>'ASC',
          ));
     ?>
     <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
     <?php
          $custom = get_post_custom($post->ID);
          $screenshot_url = $custom["screenshot_url"][0];
          $website_url = $custom["website_url"][0];
?>
	<div class="col-portfolio">
     <div class="module-portfolio">
          <h3 class="underline-dashed"><?php the_title(); ?></h3>
          <?php the_post_thumbnail(); ?> </a>
  <?php the_content(); ?>
	</div><!-- module -->
</div><!--col-->



<?php endwhile; ?>
</div><!--main-home-->
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
