<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage caddisfly
 */
 
?>

  <div class="post-author">
      <?php echo get_avatar( get_the_author_meta( 'user_email' ), 60 ); ?>
    <div>
      <div>
        <strong><?php echo get_the_author()  ?></strong>
      </div>
      <?php the_author_meta( 'description' ); ?>
    </div>
    
    <?php if( get_field( "thanks_to" ) ): ?>
      <hr/>
      <div>
        <strong>Thanks to</strong>
        <br/>
        <?php $values = the_field('thanks_to') ?>
      </div>
    <?php endif;?>
    

    <div class="entry-meta">
      <?php edit_post_link( __( 'Edit', 'caddisfly' ), '<span class="edit-link">', '</span>' ); ?>
    </div>
  </div>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
    <time datetime="<?php echo get_the_date('c') ?>">
      <?php echo the_time(get_option('date_format'));?>
    </time>

    <?php if ( is_single() ) : ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php else : ?>
		<h1 class="entry-title">
			<?php the_title(); ?>
		</h1>
		<?php endif; // is_single() ?>

    <h2 class="entry-subtitle"><?php $values = the_field('subtitle') ?></h2>

		<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		<div class="entry-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php endif; ?>

	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'caddisfly' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'caddisfly' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

</article><!-- #post -->

<div style="clear:both"></div>
<hr/>