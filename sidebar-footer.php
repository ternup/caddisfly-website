<?php
/**
 * The sidebar containing the footer widget area.
 *
 * If no active widgets in this sidebar, it will be hidden completely.
 *
 * @package WordPress
 * @subpackage caddisfly
 */


 if ( is_active_sidebar( 'sidebar-2' ) ) : ?>

      <?php if (current_user_can( 'manage_options' ) ) : ?>
      <div class="entry-meta">
        <span class="edit-link">
          <a class="post-edit-link" href="<?php echo home_url() ?>/wp-admin/widgets.php" title="Edit Widget">Edit</a>
        </span>
      </div>
      <?php endif; ?>

      <?php dynamic_sidebar( 'sidebar-2' ); ?>
<?php endif; ?>