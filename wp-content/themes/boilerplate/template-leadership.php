<?php
/*
 * Template Name: Leadership Page
 */
get_header(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/leadership.min.js"></script>
<div id="internal-wrap">
  <div id="leadership-banner-bg">
    <div id="leadership-banner-wrap" class="centered">
      <div id="leadership-banner">
        <img id="mark-highlight" src="<?php bloginfo('template_url'); ?>/images/leadership/mark.jpg" />
        <img id="bob-highlight" src="<?php bloginfo('template_url'); ?>/images/leadership/bob.jpg" />
        <img id="rob-highlight" src="<?php bloginfo('template_url'); ?>/images/leadership/rob.jpg" />
      </div>
    </div>
  </div>
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <div id="internal-lower-wrap">
    <div id="internal-lower" class="centered grid-env">
      <div id="leadership-main" class="row">
        <article class="large-6 large-offset-2 columns" id="leadership-main-content">
          <div id="default-content">
            <?php the_field('default_copy'); ?>
          </div>
          <div id="mark-content">
            <?php the_field('mark_copy'); ?>
          </div>
          <div id="bob-content">
            <?php the_field('bob_copy'); ?>
          </div>
          <div id="rob-content">
            <?php the_field('rob_copy'); ?>
          </div>
        </article>
        <aside class="large-4 columns" id="leadership-sidebar">
          <?php
            $leaders = array("default", "mark", "bob", "rob");
            foreach($leaders as $leader) {
              ?>
              <div id="<?php echo $leader; ?>-sidebar">
                <div class="huge-text"><?php the_field($leader.'_statistic'); ?></div>
                <p><?php the_field($leader.'_stat_description'); ?></p>
              </div>
              <?php
            }
          ?>
        </aside>
      </div>
      <?php get_template_part('template', 'right-sidebar'); ?>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>