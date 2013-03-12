<?php
/**
 /**
 * Template Name: Page-collection
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */

?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div class="main">
  <?php the_content(); ?>
<?php
          $loop = new WP_Query(array('post_type' => 'module-collection',
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
     <div class="module g one-quarter lap-one-half palm-one-whole">
          <h3 class="underline-dashed"><?php the_title(); ?></h3>
          <?php the_post_thumbnail(); ?> </a>
  <?php the_content(); ?>
</div><!-- module -->



<?php endwhile; ?>
</div><!--main-home-->
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>