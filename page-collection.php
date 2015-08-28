<?php

 /**
 * Template Name: Page-collection
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */

?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>



<div class="grid grid-pad main" >

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
             
<div class="col-1-3">
	<div class="module-collection">
		<h4 class="underline-dashed"><?php the_title(); ?></h4>
	<?php the_post_thumbnail(); ?> </a>
<?php the_content(); ?>
</div><!-- module -->
</div><!--col-->
          

<?php endwhile; ?>
</div><!--grid-->
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
