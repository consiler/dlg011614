<div id="promo-slider">
  <div class="promo-slider-orbit" data-orbit data-options="animation:fade; timer:false; animation_speed:300; navigation_arrows:false; bullets_container_class:orbit-glowing-bullets; pause_on_hover:false; next_on_click:false; bullets:true; slide_number:false">
    <?php
    $slideNum = 0;
    foreach($block['slides'] as $s) {
      $slideNum++;
      $slide = $s['slide'][0];
      $grl = $slide['acf_fc_layout'];
      $allowed_layouts = array("copy_left_subslider_right", "single_copy_slide");
    ?>
    <li id="promo-slide-<?php echo $slideNum; ?>" data-orbit-slide="promo-slide-<?php echo $slideNum; ?>">
    <?php
      if(in_array($grl, $allowed_layouts))
        include('indexed_slider/'.$grl.".php");
      else
        t_err("Layout ".$grl." not in allowed layouts.");
    ?>
    </li>
    <?php } ?>
  </div>
</div>