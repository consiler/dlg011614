      <?php if(get_field('has_sidebar')){ ?>
      <aside id="internal-sidebar">

      <!-- Start of Promo Tiles Repeater -->
      <?php if(get_field('right_sidebar_promo_tiles')): ?>
        <?php while(has_sub_field('right_sidebar_promo_tiles')): ?>
          <div id="internal-sidebar-promo-tile">
            <?php $promo_object = get_sub_field('promo_tile'); ?>
            <a href="<?php the_field('link_url', $promo_object->ID); ?>"><img src="<?php the_field('image', $promo_object->ID); ?>"></a>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      <!-- End of Promo Tiles Repeater -->

        <?php if(get_field('custom_html')){ ?>
          <div id="internal-sidebar-custom">
            <?php the_field('custom_html'); ?>
          </div>
        <?php } ?>
      </aside>
      <?php } ?>