<?php
/*
 * Template Name: Front Page
 */
get_header(); ?>
<div id="fp-slideshow-wrap">
  <div class="centered">
  <div data-orbit>
    <!-- Start of Front Page Slides Repeater -->
    <?php if(get_field('front_page_slides')): ?>
      <?php while(has_sub_field('front_page_slides')): ?>
        <li>
          <img src="<?php the_sub_field('slide_image'); ?>" />
          <div class="carousel-headline-wrap">
            <h2 class="carousel-headline"><?php the_sub_field('slide_title'); ?></h2>
            <p class="carousel-subheading"><?php the_sub_field('slide_description'); ?></p>
            <?php if(get_sub_field('include_cta')){ ?>
              <a href="<?php the_sub_field('slide_cta_link'); ?>"><span class="lighter-grey-button"><?php  the_sub_field('slide_cta_label'); ?></span></a>
            <?php } ?>
          </div>
        </li>
      <?php endwhile; ?>
    <?php endif; ?>
    <!-- End of Front Page Slides Repeater -->
  </div>
  </div>
</div>
<div id="fp-testimonials-wrap">
  <?php if (get_field('include_three_column')) { ?>
  <div id="fp-testimonials" class="centered">
    <?php if(get_field('three_column_data')): ?>
      <?php while(has_sub_field('three_column_data')): ?>
        <?php for($i = 1; $i <= 3; $i++) { ?>
          <div id="fp-testimonials-seemore">
          <?php if($header = get_sub_field('header_'.$i)) { ?>
            <h4><?php echo $header; ?></h4>
            <?php if($copy = get_sub_field('copy_'.$i)) { ?>
            <?php echo $copy; ?>
            <?php } ?>
            <?php if(($cta = get_sub_field('cta_'.$i)) && ($cta_link = get_sub_field('cta_link_'.$i))) { ?>
            <a href="<?php echo $cta_link; ?>"><span class="light-grey-button"><?php echo $cta; ?></span></a>
            <?php } } ?>
            </div>
          <?php } ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
  <?php } ?>
</div>
<?php get_footer(); ?>