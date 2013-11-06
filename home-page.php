<?php
/*
  Template Name: Home Page
*/

/**
 * @package WordPress
 * @subpackage Caddisfly
 */

get_header(); ?>
<article>

  <div class="mobile">
    <img class="mobilebanner" src="images/water-mobile.jpg"  alt="<?php bloginfo('sitename'); ?>" />
  </div>

  <div id="carousel" class="desktop carousel carousel-fade slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0" class="itembtn active"></li>
      <li data-target="#carousel" data-slide-to="1" class="itembtn"></li>
      <li data-target="#carousel" data-slide-to="2" class="itembtn"></li>
      <li data-target="#carousel" data-slide-to="3" class="itembtn"></li>
      <li data-target="#carousel" data-slide-to="4" class="itembtn"></li>
      <li data-target="#carousel" data-slide-to="5" class="itembtn"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
          <img src="images/slide1.jpg" alt="<?php bloginfo('sitename'); ?>"/>

            <!--<div class="item-caption">
              <div class="container">
                <div class="carousel-caption">Water Quality Testing<br></br>Made Easy</div>
              </div>
            </div>-->
          </div>

      <div class="item">
          <img src="images/slide2.jpg" alt="<?php bloginfo('sitename'); ?>"/>
      </div>

      <div class="item">
          <img src="images/slide3.jpg" alt="<?php bloginfo('sitename'); ?>"/>

      </div>

      <div class="item">
          <img src="images/slide4.jpg" alt="<?php bloginfo('sitename'); ?>"/>

      </div>

      <div class="item">
          <img src="images/slide5.jpg" alt="<?php bloginfo('sitename'); ?>"/>

      </div>

        <div class="item">
          <img src="images/slide6.jpg" alt="<?php bloginfo('sitename'); ?>"/>

      </div>
</div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel" data-slide="prev">
      <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#carousel" data-slide="next">
      <span class="icon-next"></span>
    </a>
  </div>

</article>


<section>
  <div class="container">
      <div class="entry-meta">
        <?php edit_post_link( __( 'Edit', 'caddisfly' ), '<span class="edit-link">', '</span>' ); ?>
      </div><!-- .entry-meta -->
    <div class="grid features">
      <div class="unit one-of-two">
        <?php $values = the_field('content_1') ?>
      </div>
      <div class="unit one-of-two">
        <?php $values = the_field('content_2') ?>
      </div>
    </div>
  </div>
</section>

<div style="clear:both;"></div>

<hr/>
<section>
  <div class="container">
    <div class="grid inner">
      <div class="unit one-of-three">
        <?php $values = the_field('content_3') ?>
      </div>
      <div class="unit two-of-three video">
        <div id="containingBlock">
          <div class="videopane">
                <iframe src="//player.vimeo.com/video/74707522?title=0&amp;byline=0&amp;portrait=0"
                        style="border:0;" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="clear"></div>

  <section>
  <div class="container">
      <div class="entry-meta">
        <?php edit_post_link( __( 'Edit', 'caddisfly' ), '<span class="edit-link">', '</span>' ); ?>
      </div><!-- .entry-meta -->
    <div class="grid features">
      <div class="unit one-of-two">
        <?php $values = the_field('content_4') ?>
      </div>
      <div class="unit one-of-two">
        <?php $values = the_field('content_5') ?>
      </div>
    </div>
  </div>
</section>
      
<div class="clear"></div>
<section>
  <div class="container">
    <div class="grid features">
      <div class="unit one-of-three boxy">
        <div>66 million</div> people in India are at risk by water contaminated with <span>fluoride</span>
      </div>
      <div class="unit one-of-three boxy">
        <div>57 million</div> people in India are at risk by water contaminated with <span>arsenic</span>
      </div>
      <div class="unit one-of-three boxy">
        <div>38 million</div> people in India are at risk by water contaminated with <span>bacteria</span>
      </div>
    </div>
    <!--<div style="font-style:italic;font-size:14px;float:right;margin: 0">Source: <a href="http://fluoridealert.org/articles/india-fluorosis/" target="_blank">SKELETAL FLUOROSIS IN INDIA & ITS RELEVANCE TO THE WEST</a></div>-->
  </div>

</section>
<section>
  <div class="infobar">
    <div class="container">
      <div><h2>"The economic burden due to contaminated water is estimated at $600 million a year"</h2></div>
      <div style="font-style:italic;font-size:14px;float:right;margin:-20px 30px 0">Source: <a href="http://www.wateraid.org/~/media/Publications/drinking-water-quality-rural-india.pdf" target="_blank">Drinking water quality in rural India: Issues and approaches</a></div>
    </div>
  </div>
</section>
<div style="margin-bottom:30px;"></div>
<section>
  <div class="container">
  <div class="grid">
        <?php if ( have_posts() ) : ?>
        <?php $postslist = get_posts('numberposts=3');foreach ($postslist as $post) :setup_postdata($post); ?>

          <div class="unit one-of-three">
            <a href="<?php the_permalink() ?>">
              <?php 
              $thumbnail = '';
              $post_image_id = get_post_thumbnail_id( $post->ID );
                            if ( $post_image_id ) {
                              $thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false );
                              if ( $thumbnail ) (string)$thumbnail = $thumbnail[0];
                            } 
                        ?>
              <div class="featured-image" style="position:relative;background: url('<?php echo $thumbnail; ?>') top no-repeat;">
              </div>
                <div class="project-info">
                  <h3>
                    <?php the_title(); ?>
                  </h3>
                  <?php                   
                    if (function_exists('has_excerpt') && has_excerpt()) { 
                      the_excerpt(); 
                    } elseif (get_field('subtitle')) {
                      $values = the_field('subtitle');
                    } 
                  ?>
                </div>
            </a>
          </div>
          <?php endforeach ?>
        <?php wp_reset_query(); else : ?>
        <?php endif; ?>
  </div>
      </div>
</section>

<div style="clear:both"></div>

<div style="margin-bottom:50px;"></div>
<!-- #preview -->
<?php get_footer(); ?>