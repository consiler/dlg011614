<?php
/*
 * Template Name: Secondary Page
 */
get_header(); ?>
<div id="internal-wrap">
  <?php get_template_part('template', 'large-internal-header'); ?>
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <div id="internal-lower-wrap">
    <div id="internal-lower" class="centered">
      <?php get_template_part('template', '3-columns'); ?>
      <div id="internal-main"<?php if(!get_field('has_sidebar')){ ?> class="internal-main-fullwidth"<?php } ?>>
        <?php
          get_template_part('template', 'left-sidebar');
          get_template_part('template', 'main-content');
        ?>
      </div>
      <?php get_template_part('template', 'right-sidebar'); ?>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>