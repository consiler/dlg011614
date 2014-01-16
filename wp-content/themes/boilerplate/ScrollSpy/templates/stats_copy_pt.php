<div id="hied-opportunity">
  <div id="hied-opportunity-main">
    <div id="hied-opportunity-stats-wrap">
      <div class="huge-text"><?php echo $block['stat_1']; ?></div>
      <p><?php echo $block['stat_1_caption']; ?></p>
      <div class="seperator"></div>
      <div class="huge-text"><?php echo $block['stat_2']; ?></div>
      <p><?php echo $block['stat_2_caption']; ?></p>
    </div>
    <div id="hied-opportunity-copy">
      <?php echo $block['copy']; ?>
    </div>
  </div>
  <div class="seperator"></div>
  <div id="hied-opportunity-promos">
    <div id="hied-opportunity-promos-tile-1">
      <div class="slider">
        <ul class="slides">
          <?php
          $wide_promotile = $block["wide_promo_tile"];
          foreach($block['promo_tile_slider'] as $ps) { 
                 $promo_object = $ps['tile'];?>
          <li class="slide"><a href="<?php the_field('link_url', $promo_object->ID); ?>"><img src="<?php the_field('image', $promo_object->ID); ?>"></a></li>
                 <?php
            } ?>
        </ul>
      </div>
    </div>
    <div id="hied-opportunity-promos-tile-2">
      <a href="mailto:education@dialoggroup.com"><img src="<?php bloginfo('template_url'); ?>/images/hied/hied-trade-shows.gif"></a>
    </div>
  </div>
</div>