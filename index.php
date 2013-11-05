 <?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Caddisfly
 */
get_header(); ?>

	<div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
      <div class="posts" style="background: #fff;padding:0 0 40px 0">
        <div style="margin:0 auto;max-width:700px">
          <?php if ( have_posts() ) : ?>

          <?php /* The loop */ ?>
          <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'content', get_post_format() ); ?>
          <?php endwhile; ?>        
          <?php else : ?>
          <?php get_template_part( 'content', 'none' ); ?>
          <?php endif; ?>
        </div>
        <?php caddisfly_paging_nav(); ?>
      </div>
		</div><!-- #content -->
    <div style="clear:both"></div>
  </div>
  <!-- #primary -->
<?php get_footer(); ?>