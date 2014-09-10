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

<div class="woven">
<img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/woven.png" alt="home page" />
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div class="grid grid-pad intro-home main" >
  <?php the_content(); ?>
</div>
<?php
          $loop = new WP_Query(array('post_type' => 'module-home',
          'posts_per_page' => 10,
          'meta_key'		=> 'sequence',
		  'orderby'		=> 'meta_value_num',
           'order'=>'ASC',
          ));
     ?>
     <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
     <?php
          $custom = get_post_custom($post->ID);
          $screenshot_url = $custom["screenshot_url"][0];
          $website_url = $custom["website_url"][0];
?>
	<div class="col-1-2">
     <div class="module-home">
          <h3 class="underline-dashed"><?php the_title(); ?></h3>
          <?php the_post_thumbnail(); ?> </a>
  <?php the_content(); ?>
	</div><!-- module -->
</div><!--col-->



<?php endwhile; ?>
</div><!--grid-->
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
