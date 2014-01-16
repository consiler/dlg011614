<?php
/*
 * Template Name: Case Study
 * Renaming this file will break case study pages
 */

get_header(); ?>
<div id="internal-wrap">
  <?php get_template_part('template', 'large-internal-header');?>
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <div id="internal-lower-wrap">
    <div id="internal-lower" class="centered">
      <?php include 'template-3-columns.php'; ?>
      <div id="internal-main"<?php if(!get_field('has_sidebar')){ ?> class="internal-main-fullwidth"<?php } ?>>
        <?php
          include 'template-main-content.php';
        ?>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>