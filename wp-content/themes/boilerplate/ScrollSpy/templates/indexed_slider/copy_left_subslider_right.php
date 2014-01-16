<?php $copy = $slide["copy"]; ?>
<div class="promo-slide">
  <div class="promo-slide-text">
    <?php echo $copy; ?>
  </div>
  <div class="promo-slide-tile-slider-wrap">
    <div class="promo-slide-tile-slider">
      <div class="slider">
      <ul class="slides">
        <?php
          foreach($slide['subslider'] as $subslide) {
            if($image = $subslide["image"]) {
              ?>
              <li class="slide"><img src="<?php echo $image['url']; ?>" /></li>
              <?php
            } elseif($promo_object = $subslide['promo_tile']) {
              ?>
              <li class="slide"><div class="promo-slide-imgwrap"><a href="<?php the_field('link_url', $promo_object->ID); ?>"><img src="<?php the_field('image', $promo_object->ID); ?>"></a><div></li>
              <?php
            } elseif($scopy = $subslide["copy"]) {
              //todo
            }
          }
        ?>
      </ul>
    </div>
  </div>
</div>