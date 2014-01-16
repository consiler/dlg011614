<?php
/*
 * Template Name: K12 Page
 */
get_header(); ?>
<div id="internal-wrap">
  <?php get_template_part('template', 'internal-header'); ?>
  <?php if ( have_posts() ) while ( have_posts() ) : the_post();
  get_template_part('template', 'anchor-bar');
  ?>
  <div id="internal-lower-wrap">
    <div id="internal-lower" class="centered shadow">
      <div id="k12-wrap">
        <div id="k12-intro">
          <?php the_field('introduction_copy'); ?>
        </div>
        <?php if(get_field('promo_slider')) { ?>
        <div id="k12-promo-slider">
          <div id="k12-promo-slider-orbit" class="promo-slider-orbit" data-orbit data-options="animation:fade; timer:false; animation_speed:300; navigation_arrows:false; bullets_container_class:orbit-glowing-bullets; pause_on_hover:false; next_on_click:false; bullets:true; slide_number:false">
            <?php
            $slideNum = 0;
            while(has_sub_field('promo_slider')) {
              $slideNum++;
            ?>
            <li data-orbit-slide="promo-slide-<?php echo $slideNum; ?>">
              <div class="promo-slide">
                <div class="promo-slide-text">
                  <?php the_sub_field('slide_text'); ?>
                </div>
                <?php if(get_sub_field('promo_tile_sub_slider')) { ?>
                <div class="promo-slide-tile-slider-wrap">
                  <div class="promo-slide-tile-slider">
                    <ul>
                      <?php
                      while(has_sub_field('promo_tile_sub_slider')) {
                        $promo_object = get_sub_field('promo_tile');
                      ?>
                      <li><div class="promo-slide-imgwrap"><a href="<?php the_field('link_url', $promo_object->ID); ?>"><img src="<?php the_field('image', $promo_object->ID); ?>"></a><div></li>
                      <?php } ?>
                    </ul>
                  </div>
                </div>
                <?php } ?>
              </div>
            </li>
            <?php } ?>
          </div>
        </div>
        <? } ?>
        <div id="k12-faculty">
          <?php the_field('faculty_copy'); ?>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/unslider.js"></script>
<script type="text/javascript">
$("#k12-promo-slider-orbit").on("ready.fndtn.orbit", function(event) {
  $('.orbit-glowing-bullets > li').each(function(i, blt) {
    $(this).html(''+(i+1));
  });
  $('.promo-slide-tile-slider').unslider({dots: true, speed:1000, delay:5000});
});
$(document).ready(function(){
  $(document).foundation();
});
</script>
<?php get_footer(); ?>