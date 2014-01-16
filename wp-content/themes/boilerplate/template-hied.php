<?php
/*
 * Template Name: Higher Ed Page
 */
get_header(); ?>
<div id="internal-wrap">
  <?php get_template_part('template', 'internal-header'); ?>
  <?php if ( have_posts() ) while ( have_posts() ) : the_post();
  get_template_part('template', 'anchor-bar');
  ?>
  <div id="internal-lower-wrap">
    <div id="internal-lower" class="centered shadow">
      <div id="hied-wrap">
        <div id="hied-intro">
          <?php the_field('introduction_copy'); ?>
        </div>
        <div id="hied-opportunity">
          <div id="hied-opportunity-main">
            <div id="hied-opportunity-stats-wrap">
              <div class="huge-text"><?php the_field('opportunity_stat1'); ?></div>
              <p><?php the_field('opportunity_stat1_caption'); ?></p>
              <div class="seperator"></div>
              <div class="huge-text"><?php the_field('opportunity_stat2'); ?></div>
              <p><?php the_field('opportunity_stat2_caption'); ?></p>
            </div>
            <div id="hied-opportunity-copy">
              <?php the_field('opportunity_copy'); ?>
            </div>
          </div>
          <div class="seperator"></div>
          <div id="hied-opportunity-promos">
            <div id="hied-opportunity-promos-tile-1">
              <?php $promo_object = get_field('opp_promo_tile'); ?>
              <a href="<?php the_field('link_url', $promo_object->ID); ?>"><img src="<?php the_field('image', $promo_object->ID); ?>"></a>
            </div>
            <div id="hied-opportunity-promos-tile-2">
              <a href="mailto:education@dialoggroup.com"><img src="<?php bloginfo('template_url'); ?>/images/hied/hied-trade-shows.gif"></a>
            </div>
          </div>
        </div>
        <div id="hied-faculty">
          <?php the_field('faculty_copy'); ?>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>