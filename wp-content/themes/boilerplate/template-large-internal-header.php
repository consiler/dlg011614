    <div id="large-internal-header-wrap">
    <div id="large-internal-header" class="centered" style="background:url(<?php the_field('page_heading_image'); ?>); background-repeat: no-repeat; background-position:right;">
      <header id="large-internal-header-text" style="width:<?php the_field('heading_text_width'); ?>px;">
        <h1 style="color: <?php the_field('heading_text_color');?>; width:<?php the_field('heading_text_width');?>px;"><?php the_field('page_heading_text'); ?></h1>
        <p style="color: <?php the_field('subheading_text_color');?>; width:<?php the_field('subheading_text_width'); ?>px;"><?php the_field('page_subheading_text'); ?></p>
        <?php if(get_field('include_heading_call_to_action')){ ?>
         <a href="<?php the_field('page_heading_call_to_action_link'); ?>"><span class="lighter-grey-button"><?php the_field('page_heading_call_to_action'); ?></span></a>
        <?php } ?>
      </header>
      <?php
        if(get_field('left_link_target')){ ?>
      <a href="<?php get_field('left_link_target'); ?>" class="arrow" id="left-link"></a>
      <?php }
      if(get_field('right_link_target')) { ?>
      <a href="<?php get_field('right_link_target'); ?>" class="arrow" id="right-link"></a>
      <?php } ?>
    </div>
  </div>