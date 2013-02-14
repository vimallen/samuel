<?php
/**
 * Template Name: page-contacts
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div class="main-contacts">
<h2><?php the_title(); ?></h2>
<?php
          $loop = new WP_Query(array('post_type' => 'contacts',
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
      <div class="contact">
          <h4 class="contactHeader"><?php the_title(); ?></h4>
          <a href="<?=$website_url?>"><?php the_post_thumbnail(); ?> </a>
          <?php the_content(); ?>
          </div><!--contact-->

<?php endwhile; ?>
</div><!--main-->
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>